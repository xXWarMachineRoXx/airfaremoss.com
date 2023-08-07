<?php
return PhpCsFixer\Config::create()
->setRules([
    '@PSR2' => true,
    'indentation_type' => true,
])
->setIndent("\t")
->setLineEnding("\n")
->setFinder($finder);
