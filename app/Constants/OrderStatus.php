<?php

namespace App\Constants;

class OrderStatus
{
    // Order Status Constants
    const PENDING = 'pending';
    const CONFIRMED = 'confirmed';
    const PROCESSING = 'processing';
    const SHIPPED = 'shipped';
    const DELIVERED = 'delivered';
    const CANCELLED = 'cancelled';
    const REFUNDED = 'refunded';
    const PARTIALLY_REFUNDED = 'partially_refunded';

    // Payment Status Constants
    const PAYMENT_PENDING = 'payment_pending';
    const PAYMENT_PAID = 'payment_paid';
    const PAYMENT_FAILED = 'payment_failed';
    const PAYMENT_REFUNDED = 'payment_refunded';

    // All available statuses
    public static function getAllStatuses(): array
    {
        return [
            self::PENDING,
            self::CONFIRMED,
            self::PROCESSING,
            self::SHIPPED,
            self::DELIVERED,
            self::CANCELLED,
            self::REFUNDED,
            self::PARTIALLY_REFUNDED,
        ];
    }

    // Payment statuses
    public static function getPaymentStatuses(): array
    {
        return [
            self::PAYMENT_PENDING,
            self::PAYMENT_PAID,
            self::PAYMENT_FAILED,
            self::PAYMENT_REFUNDED,
        ];
    }

    // Status labels for display
    public static function getStatusLabels(): array
    {
        return [
            self::PENDING => 'Pending',
            self::CONFIRMED => 'Confirmed',
            self::PROCESSING => 'Processing',
            self::SHIPPED => 'Shipped',
            self::DELIVERED => 'Delivered',
            self::CANCELLED => 'Cancelled',
            self::REFUNDED => 'Refunded',
            self::PARTIALLY_REFUNDED => 'Partially Refunded',
        ];
    }

    // Payment status labels
    public static function getPaymentStatusLabels(): array
    {
        return [
            self::PAYMENT_PENDING => 'Payment Pending',
            self::PAYMENT_PAID => 'Paid',
            self::PAYMENT_FAILED => 'Payment Failed',
            self::PAYMENT_REFUNDED => 'Payment Refunded',
        ];
    }

    // Check if status is final (no further changes expected)
    public static function isFinalStatus(string $status): bool
    {
        return in_array($status, [
            self::DELIVERED,
            self::CANCELLED,
            self::REFUNDED,
            self::PARTIALLY_REFUNDED,
        ]);
    }

    // Get status color for UI
    public static function getStatusColor(string $status): string
    {
        return match ($status) {
            self::PENDING => 'warning',
            self::CONFIRMED => 'info',
            self::PROCESSING => 'primary',
            self::SHIPPED => 'success',
            self::DELIVERED => 'success',
            self::CANCELLED => 'danger',
            self::REFUNDED => 'secondary',
            self::PARTIALLY_REFUNDED => 'warning',
            default => 'secondary',
        };
    }
} 