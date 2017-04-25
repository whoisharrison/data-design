<?php
namespace VerybadetsyHttp\DataDesign;
require("autoload.php");
/**
 * Profile Class for Very Bad Etsy
 *
 * This class is a collection of profile data collected by users of the website Very Bad Etsy. Hopefully it works!
 *
 * @author Michael Harrison <mharrison13@cnm.edu>
 * @version 0.0.1
 **/
class product file implements \JsonSerializable {
	/**
	 * id for this Product; this is the primary key
	 * @var int $productId
	 **/
	private $productId;

	/**
	 * id for the Profile that favorite the key
	 * @var int $productProfileId
	 **/
	private $productProfileId;

	/**
	 * price for the product
	 * @var string $productPrice
	 **/
	private $productPrice;

	/**
	 * accessor method for productId
	 *
	 * @return int|null value of productId
	 **/
	public function getProductId() : ?int {
		return($this->productId);
	}
	/**
	 * mutator method for productId
	 *
	 * @param int|null $newProductId new value of product id
	 * @throws \RangeException if $newProductId is not positive
	 * @throws \TypeError if $newProductId is not an integer
	 **/

	public function setProductId(int $newProductId) : void {
		//if profile id null immediately return it
		if($newProductId === null) {
			$this->productId = null;
			return;
		}
		// verify the tweet id is positive
		if($newProductId <=0) {
			throw(new \RangeException("profile id is not positive"));
		}
		// convert and store the product id
		$this->productId = $newProductId;
	}

	/**
	 * accessor method for product profile id
	 *
	 * @return int|null value of product profileId
	 **/
	public function getProductProfileId() : ?int {
		return($this->productProfileId);
	}

	/**
	 * mutator method for product profile id
	 *
	 * @param int|null $newProductProfileId new value for product profile id
	 * @throws \RangeException if $newProductProfileId is not positive
	 * @throws \TypeError if $newProductProfileId is not an integer
	 **/

	public function setProductProfileId(int $newProductProfileId) : void {
		//if product profile id is null immediately return it
		if($newProductProfileId === null) {
			$this->productProfileId = null;
			return;
		}
		// verify the Product Profile Id is positive
		if($newProductProfileId <=0) {
			throw (new \RangeException("Product Profile ID is not positive"));
		}
		// convert and store the product profile ID
		$this->productProfileId = $newProductProfileId;
	}

	/**
	 * accessor method for product price
	 *
	 * @return value of $productPrice
	 **/
	public function getProductPrice() : string {
		return($this->productPrice);
	}

	/**
	 * Mutator method for product price
	 *
	 * @param string $newProductPrice new value of productPrice
	 * @throws \RangeException if $newProductPrice is not positive
	 * @throws \TypeError if $newProductPrice is not a string
	 */

	public function setProductPrice(string $newProductPrice) : void {
		// verify the product price is positive
		if($newProductPrice <=0) {
			throw (new \RangeException("Product price is not positive"));
		}

		//Verify price is not too long
		if(strlen($newProductPrice) > 5) {
			throw(new \RangeException("price has too many numbers!"));
		}

		// store this product price
		$this->productPrice = $newProductPrice;
	}

}
