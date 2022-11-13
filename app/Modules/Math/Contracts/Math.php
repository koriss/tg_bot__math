<?php


namespace App\Modules\Math\Contracts;


interface Math
{
    /////// HEADER ///////
    // получить данные в виде массива
    // статус подписки, тип подписки, Дата пробления, Телефон, почта, имя пользователя
    public function getUserDataHeader(): array;

    // получить статус текущей подписки
    public function getUserStatusSubscriptionConstHeader(): string;

    // получить тип текущей подписки
    public function getUserTypeSubscriptionHeader(): string;

    // получить дату продления подписки
    public function getUserNewDataSubscriptionHeader(): string;

    // получить телефон
    public function getUserPhoneHeader(): string;

    // получить почту
    public function getUserEmailHeader(): string;

    // поулчить имя
    public function getUserNameHeader(): string;
    /////// END - HEADER ///////

    /////// CARD ///////
    // получить данные карты
    public function getUserActualCardData(): array;

    // получить статус карты есть ли вообще актуальная
    public function getUserActualCardExistence(): bool;

    // получить данные о типе карты (VISA Мир и т.п.)
    public function getUserTypeActualCardData(): string;

    // получить последние цифры карты
    public function getUserLastNumbersActualCardData(): string;

    // получить данные об окончании дейсвия карты
    public function getUserEndDateActualCardData(): string;
    /////// END - CARD //////

    /////// ordersPayment ///////
    // получить данные оплат
    public function getOrderPaymentArr(): array;
    /////// END - ordersPayment //////

    /////// yellow info widget /////////
    public function getInfoWidgetConst(): string;
    /////// END - yellow info widget /////////

    // получить данные об имеющихся промокодах у пользователя
    public function getImportUserPromoCodeToday(int $userId, int $tariffTodayId = null): array;
}
