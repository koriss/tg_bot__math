<?php


namespace App\Modules\Math\Services;


use App\Models\Promodata;
use App\Modules\ContentCabinetData\Contracts\ContentCabinetData;

class Math extends BaseService implements ContentCabinetData
{
    public function getUserDataHeader(): array
    {
        return $this->userDataHeader;
    }

    public function getUserStatusSubscriptionConstHeader(): string
    {
        return $this->userDataHeader['status_subscription_const'];
    }

    public function getUserTypeSubscriptionHeader(): string
    {
        return $this->userDataHeader['type_subscription'];
    }

    public function getUserNewDataSubscriptionHeader(): string
    {
        return $this->userDataHeader['new_data_subscription'];
    }

    public function getUserPhoneHeader(): string
    {
        return $this->userDataHeader['user_phone'];
    }

    public function getUserEmailHeader(): string
    {
        return $this->userDataHeader['user_email'];
    }

    public function getUserNameHeader(): string
    {
        return $this->userDataHeader['user_name'];
    }

    public function getUserActualCardData(): array
    {
        return $this->userActualCardData;
    }

    public function getUserActualCardExistence(): bool
    {
        return $this->userActualCardData['existence_card'];
    }

    public function getUserTypeActualCardData(): string
    {
        return $this->userActualCardData['type_card'];
    }

    public function getUserLastNumbersActualCardData(): string
    {
        return $this->userActualCardData['last_numbers_card'];
    }

    public function getUserEndDateActualCardData(): string
    {
        return $this->userActualCardData['end_date_card'];
    }

    public function getOrderPaymentArr(): array
    {
        return $this->userOrderPaymentsData;
    }

    public function getInfoWidgetConst(): string
    {
        return $this->userDataHeader['info_widget_const'];
    }

    public function getImportUserPromoCodeToday(int $userId, int $tariffTodayId = null): array
    {
        $mPromodatas = (new Promodata())->getUseUserImportPromoAllToday($userId, $tariffTodayId);

        foreach ($mPromodatas as $promodata) {
            $arr[$promodata->source] = $promodata->data;
        }

        return $arr ?? [];
    }


}
