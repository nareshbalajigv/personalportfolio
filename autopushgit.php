<?php

system("git add .");
$commit_message = readline("Say your commit message : ");
system("git commit -m '$commit_message'");
system("git push origin master");