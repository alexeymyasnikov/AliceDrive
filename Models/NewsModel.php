<?php
/**
 * Created by PhpStorm.
 * User: skogs
 * Date: 10.04.2015
 * Time: 0:00
 */
namespace MainWebSite {
    class NewsModel extends BaseModel
    {
        public function get_data()
        {
            $sql = "SELECT
                    id,
                    title,
                    slug,
                    intro,
                    DATE_FORMAT(post_date, '%d.%m.%Y') as date
                FROM
                    news
                ORDER BY post_date DESC";

            $this->setSql($sql);
            $articles = $this->getAll();

            if (empty($articles)) {
                return false;
            }

            return $articles;
        }

        public function getArticleById($id)
        {
            $sql = "SELECT
                    id,
                    title,
                    slug,
                    DATE_FORMAT(post_date, '%d.%m.%Y') as date,
                    body
                FROM
                    news
                WHERE
                    id = $id";

            $this->setSql($sql);
            $articleDetails = $this->getRow();

            if (empty($articleDetails)) {
                return false;
            }

            return $articleDetails;
        }
    }
}