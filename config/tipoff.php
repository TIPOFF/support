<?php

return [

    'model_class' => [

        'block' => \Tipoff\Scheduling\Models\Block::class,

        'booking' => \Tipoff\Bookings\Models\Booking::class,

        'cart' => \Tipoff\Checkout\Models\Cart::class,

        'cart_item' => \Tipoff\Checkout\Models\CartItem::class,

        'competitor' => \Tipoff\Reviews\Models\Competitor::class,

        'contact' => \Tipoff\Forms\Models\Contact::class,

        'customer' => \Tipoff\Addresses\Models\Customer::class, // Will be renamed later to address when new features added

        'discount' => \Tipoff\Discounts\Models\Discount::class,

        'fee' => \Tipoff\Fees\Models\Fee::class,

        'feedback' => \Tipoff\Feedback\Models\Feedback::class,

        'flex_day' => \Tipoff\FlexScheduling\Models\FlexDay::class,

        'game' => \Tipoff\Scheduling\Models\Game::class,

        'hold' => \Tipoff\Scheduling\Models\Hold::class,

        'image' => \DrewRoberts\Media\Models\Image::class,

        'insight' => \Tipoff\Reviews\Models\Insight::class,

        'invoice' => \Tipoff\Invoices\Models\Invoice::class,

        'key' => \Tipoff\Reviews\Models\Key::class,

        'location' => \Tipoff\Locations\Models\Location::class,

        'market' => \Tipoff\Locations\Models\Market::class,

        'note' => \Tipoff\Notes\Models\Note::class,

        'order' => \Tipoff\Checkout\Models\Order::class,

        'order_item' => \Tipoff\Checkout\Models\OrderItem::class,

        'page' => \DrewRoberts\Blog\Models\Page::class,

        'participant' => \Tipoff\EscapeRoom\Participant::class,

        'payment' => \Tipoff\Payments\Models\Payment::class,

        'post' => \DrewRoberts\Blog\Models\Post::class,

        'rate' => \Tipoff\EscapeRoom\Models\Rate::class,

        'recurring_schedule' => \Tipoff\Scheduling\Models\RecurringSchedule::class,

        'refund' => \Tipoff\Refunds\Models\Refund::class,

        'review' => \Tipoff\Reviews\Models\Review::class,

        'room' => \Tipoff\EscapeRoom\Models\Room::class,

        'schedule_eraser' => \Tipoff\Scheduling\Models\ScheduleEraser::class,

        'series' => \DrewRoberts\Blog\Models\Series::class,

        'signature' => \Tipoff\Waivers\Models\Signature::class,

        'slot' => \Tipoff\Scheduling\Models\Slot::class,

        'snapshot' => \Tipoff\Reviews\Models\Snapshot::class,

        'status' => \Tipoff\Statuses\Models\Status::class,

        'supervision' => \Tipoff\EscapeRoom\Models\Supervision::class,

        'tag' => \DrewRoberts\Media\Models\Tag::class,

        'tax' => \Tipoff\Taxes\Models\Tax::class,

        'theme' => \Tipoff\EscapeRoom\Models\Theme::class,

        'topic' => \DrewRoberts\Blog\Models\Topic::class,

        'user' => \App\Models\User::class,

        'video' => \DrewRoberts\Media\Models\Video::class,

        'voucher' => \Tipoff\Vouchers\Models\Voucher::class,

        'voucher_type' => \Tipoff\Vouchers\Models\VoucherType::class,

    ],

    'nova_class' => [

        'block' => \Tipoff\Scheduling\Nova\Block::class,

        'booking' => \Tipoff\Bookings\Nova\Booking::class,

        'cart' => \Tipoff\Checkout\Nova\Cart::class,

        'cart_item' => \Tipoff\Checkout\Nova\CartItem::class,

        'competitor' => \Tipoff\Reviews\Nova\Competitor::class,

        'contact' => \Tipoff\Forms\Nova\Contact::class,

        'customer' => \Tipoff\Addresses\Nova\Customer::class, // Will be renamed later to address when new features added

        'discount' => \Tipoff\Discounts\Nova\Discount::class,

        'fee' => \Tipoff\Fees\Nova\Fee::class,

        'feedback' => \Tipoff\Feedback\Nova\Feedback::class,

        'flex_day' => \Tipoff\FlexScheduling\Nova\FlexDay::class,

        'game' => \Tipoff\Scheduling\Nova\Game::class,

        'hold' => \Tipoff\Scheduling\Nova\Hold::class,

        'image' => \DrewRoberts\Media\Nova\Image::class,

        'insight' => \Tipoff\Reviews\Nova\Insight::class,

        'invoice' => \Tipoff\Invoices\Nova\Invoice::class,

        'key' => \Tipoff\Reviews\Nova\Key::class,

        'location' => \Tipoff\Locations\Nova\Location::class,

        'market' => \Tipoff\Locations\Nova\Market::class,

        'note' => \Tipoff\Notes\Nova\Note::class,

        'order' => \Tipoff\Checkout\Nova\Order::class,

        'order_item' => \Tipoff\Checkout\Nova\OrderItem::class,

        'page' => \DrewRoberts\Blog\Nova\Page::class,

        'participant' => \Tipoff\EscapeRoom\Participant::class,

        'payment' => \Tipoff\Payments\Nova\Payment::class,

        'post' => \DrewRoberts\Blog\Nova\Post::class,

        'rate' => \Tipoff\EscapeRoom\Nova\Rate::class,

        'recurring_schedule' => \Tipoff\Scheduling\Nova\RecurringSchedule::class,

        'refund' => \Tipoff\Refunds\Nova\Refund::class,

        'review' => \Tipoff\Reviews\Nova\Review::class,

        'room' => \Tipoff\EscapeRoom\Nova\Room::class,

        'schedule_eraser' => \Tipoff\Scheduling\Nova\ScheduleEraser::class,

        'series' => \DrewRoberts\Blog\Nova\Series::class,

        'signature' => \Tipoff\Waivers\Nova\Signature::class,

        'slot' => \Tipoff\Scheduling\Nova\Slot::class,

        'snapshot' => \Tipoff\Reviews\Nova\Snapshot::class,

        'status' => \Tipoff\Statuses\Nova\Status::class,

        'supervision' => \Tipoff\EscapeRoom\Nova\Supervision::class,

        'tag' => \DrewRoberts\Media\Nova\Tag::class,

        'tax' => \Tipoff\Taxes\Nova\Tax::class,

        'theme' => \Tipoff\EscapeRoom\Nova\Theme::class,

        'topic' => \DrewRoberts\Blog\Nova\Topic::class,

        'user' => \App\Nova\User::class,

        'video' => \DrewRoberts\Media\Nova\Video::class,

        'voucher' => \Tipoff\Vouchers\Nova\Voucher::class,

        'voucher_type' => \Tipoff\Vouchers\Nova\VoucherType::class,

    ]

];
