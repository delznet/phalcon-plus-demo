<?php

namespace App\Model;

use Delz\PhalconPlus\Mvc\Model;

/**
 * 用户模型
 *
 * @package App\Model
 */
class User extends Model
{
    protected $tableName = 'user';

    /**
     * ID,自增
     * @var int
     */
    protected $id;

    /**
     * 姓名
     *
     * @var string
     */
    protected $name;

    /**
     * 手机号码
     *
     * @var string
     */
    protected $mobile;

    /**
     * 地址
     *
     * @var string
     */
    protected $address;

    /**
     * 公司
     *
     * @var string
     */
    protected $company;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile(string $mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany(string $company)
    {
        $this->company = $company;
    }



}