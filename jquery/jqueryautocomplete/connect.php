<?php
mysql_connect("localhost", "root", "Con2DB") or die ("error connection!!!");
mysql_select_db("testing") or die("error db!!!");
mysql_query("SET NAMES UTF8");