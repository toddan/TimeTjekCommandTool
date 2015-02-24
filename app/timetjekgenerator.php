<?php
require_once './lib/Command.php';
require_once './lib/CommandInterface.php';
require_once './lib/Application.php';
require_once './seeddata/SeedData.php';
require_once './configuration/Configurations.php';
require_once 'repositories/Repository.php';
require_once 'commands/seedcommands/SeedAccountCommand.php';
require_once 'commands/seedcommands/SeedCodelistDaysCommand.php';
require_once 'commands/seedcommands/SeedEmployeeSalarySeCommand.php';

$timetjekgenerator = new Application();
$timetjekgenerator->AddCommand(new SeedAccountCommand("account"));

// run the bastard!
$timetjekgenerator->Run();
