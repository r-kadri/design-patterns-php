<?php

namespace Ryan\DesignPatternsPhp\Strategy;

class MessageSender {

    private MessageSenderStrategy $messageSenderStrategy;

    // Default : email strategy
    public function __construct(MessageSenderStrategy $messageSenderStrategy = new EmailSender()) {
        $this->messageSenderStrategy = $messageSenderStrategy;
    }

    public function send(): void {
        $this->messageSenderStrategy->send();
    }

    public function setSenderStrategy(MessageSenderStrategy $strategy) {
        $this->messageSenderStrategy = $strategy;
    }
}