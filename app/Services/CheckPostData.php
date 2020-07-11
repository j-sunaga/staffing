<?php

namespace App\Services;

class CheckPostData
{
  public static function checkStatus($data)
  {
    if ($data->status === 0) {
      $status = '未着手';
    }
    if ($data->status === 1) {
      $status = '着手中';
    }
    if ($data->status === 2) {
      $status = '完了';
    }
    return $status;
  }

  public static function checkPriority($data)
  {
    if ($data->priority === 0) {
      $priority = '低';
    }
    if ($data->priority === 1) {
      $priority = '中';
    }
    if ($data->age === 2) {
      $priority = '高';
    }
    return $priority;
  }
}
