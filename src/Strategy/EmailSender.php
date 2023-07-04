<?php

namespace Ryan\DesignPatternsPhp\Strategy;

class EmailSender implements MessageSenderStrategy {

    public function send(): void {
        echo 'Sending Email ...' . PHP_EOL;
    }

}
