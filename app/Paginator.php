<?php

namespace App;

use AshleyDawson\SimplePagination\Paginator as Pagination;
use JasonGrimes\Paginator as PageUrl;

class Paginator{
    public $items;
	public $noOfItems;
	public $pagesInRange;
	public $paginator;
	public $pagination;
	public $urlPattern;
	public $pageUrl;
	/**
	 * Paginator constructor.
	 * @param array $items
	 * @param int $noOfItems
	 * @param int $pagesInRange
	 * @param string $urlPattern
	 */
	public function __construct(array $items, string $urlPattern="", int $noOfItems = 10, int $pagesInRange = 5)
	{
		/**
		 * For Paginator
		 */
		$this->items = $items;
		$this->noOfItems = $noOfItems;
		$this->pagesInRange = $pagesInRange;
		$this->paginator = new Pagination();
		if (!isset($_GET['page']) || $_GET['page'] === null): $_GET['page'] = 1;endif;
		/**
		 * For PageUrl
		 */
		if (count($_GET) == 1 || empty($_GET)){ 
			$this->urlPattern = "?page=(:num)";
		}else{
			$newGet = array_filter($_GET,function($k) {
				return $k != 'page';
			}, ARRAY_FILTER_USE_KEY);
			$getUrl = '';
			foreach($newGet as $key => $value){
				$getUrl .= "{$key}={$value}";
			}
			$this->urlPattern = "?$getUrl&page=(:num)";
		}
		$this->pageUrl = new PageUrl(count($items), $noOfItems, $_GET['page'], $this->urlPattern);
	}
	/**
	 * Create Pagination
	 *
	 * @return mixed
	 */
	public function getPagination()
	{
		$items = $this->items;
		$this->paginator
			->setItemsPerPage($this->noOfItems)
			->setPagesInRange($this->pagesInRange) // How many pages to display in navigation (e.g. if we have a lot of pages to get through)
		;
		// Pass our item total callback
		$this->paginator->setItemTotalCallback(function () use ($items) {
			return count($items);
		});
		$this->paginator->setSliceCallback(function ($offset, $length) use ($items) {
			return array_slice($items, $offset, $length);
		});
		return $this->paginator->paginate((int)$_GET['page']);
	}
	/**
	 * @return string
	 */
	public function getPageUrl()
	{
		return "<div class=\"mv-pagination-style-1 has-count-post\">{$this->pageUrl}</div>";
	}
}