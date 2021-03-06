<?php

/*
 * This file is part of the Hearsay PubSubHubbub bundle.
 *
 * The Hearsay PubSubHubbub bundle is free software: you can redistribute it
 * and/or modify it under the terms of the GNU Lesser General Public License
 * as published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * The Hearsay PubSubHubbub bundle is distributed in the hope that it will be
 * useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with the Hearsay PubSubHubbub bundle.  If not, see
 * <http://www.gnu.org/licenses/>.
 */

namespace Hearsay\PubSubHubbubBundle;

/**
 * List of events thrown in the PubSubHubbub bundle.
 * @package HearsayPubSubHubbubBundle
 * @author Kevin Montag <kevin@hearsay.it>
 */
final class Events {
    /**
     * The onNotificationReceived event occurs when a push notification is
     * received from a PubSubHubbub hub.  Listeners receive an instance of
     * <code>Hearsay\PubSubHubbubBundle\Event\NotificationReceivedEvent</code>.
     * @var string
     */
    const onPushNotificationReceived = 'onPushNotificationReceived';

    /**
     * The onTestSubscribeRequest event occurs when a subscription request is
     * received by the dummy hub subscriber, e.g. in a test environment.
     * Listeners receive an instance of
     * <code>Hearsay\PubSubHubbubBundle\Event\SubscriptionEvent</code>.
     */
    const onTestSubscribeRequest = 'onTestSubscribeRequest';

    /**
     * The onTestUnsubscribeRequest event when an unsubscribe request is
     * received by the dummy hub subscriber, e.g. in a test environment.
     * Listeners receive an instance of
     * <code>Hearsay\PubSubHubbubBundle\Event\SubscriptionEvent</code>.
     */
    const onTestUnsubscribeRequest = 'onTestUnsubscribeRequest';
}
