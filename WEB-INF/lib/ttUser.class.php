<?php
// +----------------------------------------------------------------------+
// | Anuko Time Tracker
// +----------------------------------------------------------------------+
// | Copyright (c) Anuko International Ltd. (https://www.anuko.com)
// +----------------------------------------------------------------------+
// | LIBERAL FREEWARE LICENSE: This source code document may be used
// | by anyone for any purpose, and freely redistributed alone or in
// | combination with other software, provided that the license is obeyed.
// |
// | There are only two ways to violate the license:
// |
// | 1. To redistribute this code in source form, with the copyright
// |    notice or license removed or altered. (Distributing in compiled
// |    forms without embedded copyright notices is permitted).
// |
// | 2. To redistribute modified versions of this code in *any* form
// |    that bears insufficient indications that the modifications are
// |    not the work of the original author(s).
// |
// | This license applies to this document only, not any other software
// | that it may be combined with.
// |
// +----------------------------------------------------------------------+
// | Contributors:
// | https://www.anuko.com/time_tracker/credits.htm
// +----------------------------------------------------------------------+

class ttUser {
  var $login = null;            // User login.
  var $name = null;             // User name.
  var $id = null;               // User id.
  var $team_id = null;          // Team id.
  var $role_id = null;          // Role id.
  var $rank = null;             // User role rank.
  var $client_id = null;        // Client id for client user role.
  var $behalf_id = null;        // User id, on behalf of whom we are working.
  var $behalf_name = null;      // User name, on behalf of whom we are working.
  var $email = null;            // User email.
  var $lang = null;             // Language.
  var $decimal_mark = null;     // Decimal separator.
  var $date_format = null;      // Date format.
  var $time_format = null;      // Time format.
  var $week_start = 0;          // Week start day.
  var $show_holidays = 0;       // Whether to show holidays in calendar.
  var $tracking_mode = 0;       // Tracking mode.
  var $project_required = 0;    // Whether project selection is required on time entires.
  var $task_required = 0;       // Whether task selection is required on time entires.
  var $record_type = 0;         // Record type (duration vs start and finish, or both).
  var $punch_mode = 0;          // Whether punch mode is enabled for user.
  var $allow_overlap = 0;       // Whether to allow overlapping time entries.
  var $future_entries = 0;      // Whether to allow creating future entries.
  var $uncompleted_indicators = 0; // Uncompleted time entry indicators (show nowhere or on users page).
  var $bcc_email = null;        // Bcc email.
  var $currency = null;         // Currency.
  var $plugins = null;          // Comma-separated list of enabled plugins.
  var $config = null;           // Comma-separated list of miscellaneous config options.
  var $team = null;             // Team name.
  var $custom_logo = 0;         // Whether to use a custom logo for team.
  var $lock_spec = null;        // Cron specification for record locking.
  var $workday_minutes = 480;   // Number of work minutes in a regular day.
  var $rights = array();        // An array of user rights such as 'track_own_time', etc.
  var $is_client = false;       // Whether user is a client as determined by missing 'track_own_time' right.

  // Constructor.
  function __construct($login, $id = null) {
    if (!$login && !$id) {
      // nothing to initialize
      return;
    }

    $mdb2 = getConnection();

    $sql = "SELECT u.id, u.login, u.name, u.team_id, u.role_id, r.rank, r.rights, u.client_id, u.email, t.name as team_name,
      t.currency, t.lang, t.decimal_mark, t.date_format, t.time_format, t.week_start,
      t.tracking_mode, t.project_required, t.task_required, t.record_type,
      t.bcc_email, t.plugins, t.config, t.lock_spec, t.workday_minutes, t.custom_logo
      FROM tt_users u LEFT JOIN tt_teams t ON (u.team_id = t.id) LEFT JOIN tt_roles r on (r.id = u.role_id) WHERE ";
    if ($id)
      $sql .= "u.id = $id";
    else
      $sql .= "u.login = ".$mdb2->quote($login);
    $sql .= " AND u.status = 1";

    $res = $mdb2->query($sql);
    if (is_a($res, 'PEAR_Error')) {
      return;
    }

    $val = $res->fetchRow();
    if ($val['id'] > 0) {
      $this->login = $val['login'];
      $this->name = $val['name'];
      $this->id = $val['id'];
      $this->team_id = $val['team_id'];
      $this->role_id = $val['role_id'];
      $this->rights = explode(',', $val['rights']);
      $this->is_client = !in_array('track_own_time', $this->rights);
      $this->rank = $val['rank'];
      $this->client_id = $val['client_id'];
      $this->email = $val['email'];
      $this->lang = $val['lang'];
      $this->decimal_mark = $val['decimal_mark'];
      $this->date_format = $val['date_format'];
      $this->time_format = $val['time_format'];
      $this->week_start = $val['week_start'];
      $this->tracking_mode = $val['tracking_mode'];
      $this->project_required = $val['project_required'];
      $this->task_required = $val['task_required'];
      $this->record_type = $val['record_type'];
      $this->bcc_email = $val['bcc_email'];
      $this->team = $val['team_name'];
      $this->currency = $val['currency'];
      $this->plugins = $val['plugins'];
      $this->lock_spec = $val['lock_spec'];
      $this->workday_minutes = $val['workday_minutes'];
      $this->custom_logo = $val['custom_logo'];

      $this->config = $val['config'];
      $config_array = explode(',', $this->config);

      // Set user config options.
      $this->show_holidays = in_array('show_holidays', $config_array);
      $this->punch_mode = in_array('punch_mode', $config_array);
      $this->allow_overlap = in_array('allow_overlap', $config_array);
      $this->future_entries = in_array('future_entries', $config_array);
      $this->uncompleted_indicators = in_array('uncompleted_indicators', $config_array);

      // Set "on behalf" id and name.
      if (isset($_SESSION['behalf_id'])) {
          $this->behalf_id = $_SESSION['behalf_id'];
          $this->behalf_name = $_SESSION['behalf_name'];
      }
    }
  }

  // The getActiveUser returns user id on behalf of whom the current user is operating.
  function getActiveUser() {
    return ($this->behalf_id ? $this->behalf_id : $this->id);
  }

  // can - determines whether user has a right to do something.
  function can($do_something) {
    return in_array($do_something, $this->rights);
  }

  // isAdmin - determines whether current user is admin (has right_administer_site).
  function isAdmin() {
    return $this->can('administer_site');
  }

  // isManager - determines whether current user is team manager.
  // This is a legacy function that we are getting rid of by replacing with rights check.
  function isManager() {
    return $this->can('export_data'); // By default this is assigned to managers but not co-managers.
                                      // Which is sufficient for now until we refactor all calls
                                      // to this function and then remove it.
  }

  // isCoManager - determines whether current user is team comanager.
  // This is a legacy function that we are getting rid of by replacing with rights check.
  function isCoManager() {
    return ($this->can('manage_users') && !$this->can('export_data'));
  }

  // isClient - determines whether current user is a client.
  function isClient() {
    return $this->is_client;
  }

  // canManageTeam - determines whether current user is manager or co-manager.
  // This is a legacy function that we are getting rid of by replacing with rights check.
  function canManageTeam() {
    return $this->can('manage_users'); // By default this is assigned to co-managers (an managers).
                                       // Which is sufficient for now until we refactor all calls
                                       // to this function and then remove it.
  }

  // isPluginEnabled checks whether a plugin is enabled for user.
  function isPluginEnabled($plugin)
  {
    return in_array($plugin, explode(',', $this->plugins));
  }

  // getAssignedProjects - returns an array of assigned projects.
  function getAssignedProjects()
  {
    $result = array();
    $mdb2 = getConnection();

    // Do a query with inner join to get assigned projects.
    $sql = "select p.id, p.name, p.description, p.tasks, upb.rate from tt_projects p
      inner join tt_user_project_binds upb on (upb.user_id = ".$this->getActiveUser()." and upb.project_id = p.id and upb.status = 1)
      where p.team_id = $this->team_id and p.status = 1 order by p.name";
    $res = $mdb2->query($sql);
    if (!is_a($res, 'PEAR_Error')) {
      while ($val = $res->fetchRow()) {
        $result[] = $val;
      }
    }
    return $result;
  }

  // isDateLocked checks whether a specifc date is locked for modifications.
  function isDateLocked($date)
  {
    if (!$this->isPluginEnabled('lk'))
      return false; // Locking feature is disabled.

    if (!$this->lock_spec)
      return false; // There is no lock specification.

    if (!$this->behalf_id && $this->can('override_own_date_lock'))
      return false; // User is working as self and can override own date lock.

    if ($this->behalf_id && $this->can('override_date_lock'))
      return false; // User is working on behalf of someone else and can override date lock.

    require_once(LIBRARY_DIR.'/tdcron/class.tdcron.php');
    require_once(LIBRARY_DIR.'/tdcron/class.tdcron.entry.php');

    // Calculate the last occurrence of a lock.
    $last = tdCron::getLastOccurrence($this->lock_spec, time());
    $lockdate = new DateAndTime(DB_DATEFORMAT, strftime('%Y-%m-%d', $last));
    if ($date->before($lockdate))
      return true;

    return false;
  }

  // canOverridePunchMode checks whether a user can override punch mode in a situation.
  function canOverridePunchMode()
  {
    if (!$this->behalf_id && !$this->can('override_own_punch_mode'))
      return false; // User is working as self and cannot override for self.

    if ($this->behalf_id && !$this->can('override_punch_mode'))
      return false; // User is working on behalf of someone else and cannot override.

    return true;
  }
}
