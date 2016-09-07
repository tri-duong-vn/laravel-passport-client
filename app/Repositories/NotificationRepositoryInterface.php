<?php namespace App\Repositories;

interface NotificationRepositoryInterface extends SingleKeyModelRepositoryInterface
{

    /**
     * @param int $userId
     * @param string $order
     * @param string $direction
     * @param int $offset
     * @param int $limit
     * @return mixed
     */
    public function getByUserId($userId, $order = 'id', $direction = 'desc', $offset, $limit);

    /**
     * @param string $categoryType
     * @param int $userId
     * @param string $order
     * @param string $direction
     * @param int $offset
     * @param int $limit
     * @return \App\Models\Notification[]
     */
    public function getByCategoryTypeAndUserId(
        $categoryType,
        $userId,
        $order = 'id',
        $direction = 'desc',
        $offset,
        $limit
    );

    /**
     * @param  int $userId
     * @param  int $lastId
     * @return int
     */
    public function countUnreadByUserId($userId, $lastId);

}