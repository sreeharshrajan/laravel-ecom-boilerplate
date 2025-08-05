<?php

namespace App\Constants;

class Permission
{

  // Permission Constants
  const PERMISSION_VIEW_PRODUCTS = 'view_products';
  const PERMISSION_CREATE_PRODUCTS = 'create_products';
  const PERMISSION_EDIT_PRODUCTS = 'edit_products';
  const PERMISSION_DELETE_PRODUCTS = 'delete_products';

  const PERMISSION_VIEW_ORDERS = 'view_orders';
  const PERMISSION_CREATE_ORDERS = 'create_orders';
  const PERMISSION_EDIT_ORDERS = 'edit_orders';
  const PERMISSION_DELETE_ORDERS = 'delete_orders';

  const PERMISSION_VIEW_CUSTOMERS = 'view_customers';
  const PERMISSION_CREATE_CUSTOMERS = 'create_customers';
  const PERMISSION_EDIT_CUSTOMERS = 'edit_customers';
  const PERMISSION_DELETE_CUSTOMERS = 'delete_customers';

  const PERMISSION_VIEW_REPORTS = 'view_reports';
  const PERMISSION_MANAGE_SETTINGS = 'manage_settings';
  const PERMISSION_MANAGE_USERS = 'manage_users';

  // Get all available permissions
  public static function getAllPermissions(): array
  {
    return [
      self::PERMISSION_VIEW_PRODUCTS,
      self::PERMISSION_CREATE_PRODUCTS,
      self::PERMISSION_EDIT_PRODUCTS,
      self::PERMISSION_DELETE_PRODUCTS,
      self::PERMISSION_VIEW_ORDERS,
      self::PERMISSION_CREATE_ORDERS,
      self::PERMISSION_EDIT_ORDERS,
      self::PERMISSION_DELETE_ORDERS,
      self::PERMISSION_VIEW_CUSTOMERS,
      self::PERMISSION_CREATE_CUSTOMERS,
      self::PERMISSION_EDIT_CUSTOMERS,
      self::PERMISSION_DELETE_CUSTOMERS,
      self::PERMISSION_VIEW_REPORTS,
      self::PERMISSION_MANAGE_SETTINGS,
      self::PERMISSION_MANAGE_USERS,
    ];
  }
}
