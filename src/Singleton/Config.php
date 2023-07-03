<?php

namespace Ryan\DesignPatternsPhp\Singleton;

class Config {

    private static ?Config $_instance = null;
    private static int $nb_instance = 0;

    private array $welcomeTexts;

    private function __construct() {
        $this->welcomeTexts = [
            'Welcome everyone !',
            'Welcome guys !',
            'Welcome !',
        ];
        echo 'Object created (' . ++self::$nb_instance . ' time)' . PHP_EOL;
    }

    /**
     * Create the instance if it has not been created and return it.
     */
    public static function getInstance(): Config {
        if(is_null(self::$_instance)) {
            self::$_instance = new Config();
        }
        return self::$_instance;
    }

    /**
     * Get a random welcome text
     */
    public function welcome(): string {
        return $this->welcomeTexts[mt_rand(0, 2)];
    }
}
