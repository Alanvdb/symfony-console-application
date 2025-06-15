<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude('var')
    ->exclude('vendor')
    ->exclude('coverage')
    ->exclude('build')
;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PHP84Migration' => true,
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        'general_phpdoc_annotation_remove' => ['annotations' => ['expectedDeprecation']],
        'heredoc_to_nowdoc' => false,
        'php_unit_strict' => false,
        'php_unit_test_class_requires_covers' => false,
        'phpdoc_add_missing_param_annotation' => false,
        'concat_space' => ['spacing' => 'one'],
        'ordered_class_elements' => true,
        'array_syntax' => ['syntax' => 'short'],
        'declare_strict_types' => true,
        'native_function_invocation' => [
            'include' => ['@compiler_optimized'],
            'scope' => 'namespaced',
            'strict' => true,
        ],
    ])
    ->setFinder($finder)
;