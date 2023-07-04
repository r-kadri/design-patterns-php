<?php

namespace Ryan\DesignPatternsPhp\Strategy;

class SMSSender implements MessageSenderStrategy {

    public function send(): void {
        echo 'Sending SMS ...' . PHP_EOL;
    }

}
