<?php

namespace Main\Model;


/**
 * @Entity @Table(name="news")
 **/
class News
{
	/** @Id @Column(type="integer") @GeneratedValue **/
	protected $id;

	/** @Column(type="string") **/
	protected $name;

	/** @Column(type="string") **/
	protected $href;

	/** @Column(type="string") **/
	protected $image;

	/** @Column(type="string") **/
	protected $description;

	/** @Column(type="string") **/
	protected $time;

	/** @Column(type="integer") **/
	protected $year;

	/** @Column(type="integer") **/
	protected $month;

	/** @Column(type="integer") **/
	protected $day;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getHref() {
		return $this->href;
	}

	public function setHref($href) {
		$this->href = $href;
	}

	public function getImage() {
		return $this->image;
	}

	public function setImage($image) {
		$this->image = $image;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
	}

	public function getTime() {
		return $this->time;
	}

	public function setTime($time) {
		$this->time = $time;
	}

	public function getYear() {
		return $this->year;
	}

	public function setYear($year) {
		$this->year = $year;
	}

	public function getMonth() {
		return $this->month;
	}

	public function setMonth($month) {
		$this->month = $month;
	}

	public function getDay() {
		return $this->day;
	}

	public function setDay($day) {
		$this->day = $day;
	}

	public function toArray() {
		return get_object_vars($this);
	}
}