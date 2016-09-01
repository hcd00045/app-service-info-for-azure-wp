<?php
/*
  Copyright 2016 Haig Didizian

  This file is part of Azure App Service Info.

  Azure App Service Info is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 2 of the License, or
  (at your option) any later version.

  Azure App Service Info is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with Azure App Service Info.  If not, see <http://www.gnu.org/licenses/>.
*/

class AppServiceDeploymentInfo {
  public $id;
  public $author;
  public $message;
  public $endTime;
  
  function __construct($xml) {
    $this->id = (string)$xml->id;
    $this->author = (string)$xml->author;
    $this->message = (string)$xml->message;
    $this->endTime = strtotime($xml->endTime);
  }
}
?>
