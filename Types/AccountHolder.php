<?php

namespace two_plug\sdk_fitbank;

class AccountHolder extends Person
{
    private int $companyType;
    private int $isCompany;
    private int $checkPendingTransfers;
    private string $companyActivity;
    private string $constitutionDate;

    /**
     * @return int
     */
    public function getCompanyType(): int
    {
        return $this->companyType;
    }

    /**
     * @param int $companyType
     */
    public function setCompanyType(int $companyType): void
    {
        $this->companyType = $companyType;
    }

    /**
     * @return int
     */
    public function getIsCompany(): int
    {
        return $this->isCompany;
    }

    /**
     * @param int $isCompany
     */
    public function setIsCompany(int $isCompany): void
    {
        $this->isCompany = $isCompany;
    }

    /**
     * @return int
     */
    public function getCheckPendingTransfers(): int
    {
        return $this->checkPendingTransfers;
    }

    /**
     * @param int $checkPendingTransfers
     */
    public function setCheckPendingTransfers(int $checkPendingTransfers): void
    {
        $this->checkPendingTransfers = $checkPendingTransfers;
    }

    /**
     * @return string
     */
    public function getCompanyActivity(): string
    {
        return $this->companyActivity;
    }

    /**
     * @param string $companyActivity
     */
    public function setCompanyActivity(string $companyActivity): void
    {
        $this->companyActivity = $companyActivity;
    }

    /**
     * @return string
     */
    public function getConstitutionDate(): string
    {
        return $this->constitutionDate;
    }

    /**
     * @param string $constitutionDate
     */
    public function setConstitutionDate(string $constitutionDate): void
    {
        $this->constitutionDate = $constitutionDate;
    }

    public function toArray(): array
    {
        return array_merge(parent::toArray(), [
            "CompanyType" => $this->companyType,
            "IsCompany" => $this->isCompany,
            "CheckPendingTransfers" => $this->checkPendingTransfers,
            "CompanyActivity" => $this->companyActivity,
            "ConstitutionDate" => $this->constitutionDate
        ]);
    }
}