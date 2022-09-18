<?php 
namespace App\Models;

class Client
{
    protected int $id;
    protected string $full_name;
    protected ?string $country;
    protected ?string $city;
    protected ?string $street;
    protected ?int $zip;
    protected ?string $mobile;
    protected ?string $phone;
    protected ?string $mail;
    protected ?string $birth_date;
    protected ?string $vat_number;
    protected ?string $tax_id;

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id) : self
    {
        $this->setFull_name("Martin Tauer");
        $this->setMobile("+420730830232");
        $this->setId(111);

        return $this;
    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
	/**
	 * @return int
	 */
	function getId(): int {
		return $this->id;
	}
	/**
	 * @param int $id 
	 * @return Client
	 */
	function setId(int $id): self {
		$this->id = $id;
		return $this;
	}
	/**
	 * @return ?string
	 */
	function getFull_name(): ?string {
		return $this->full_name;
	}
	/**
	 * @return ?string
	 */
	function getCountry(): ?string {
		return $this->country;
	}
	/**
	 * @param ?string $full_name 
	 * @return Client
	 */
	function setFull_name(?string $full_name): self {
		$this->full_name = $full_name;
		return $this;
	}
	/**
	 * @param ?string $country 
	 * @return Client
	 */
	function setCountry(?string $country): self {
		$this->country = $country;
		return $this;
	}
	/**
	 * @return ?string
	 */
	function getCity(): ?string {
		return $this->city;
	}
	/**
	 * @param ?string $city 
	 * @return Client
	 */
	function setCity(?string $city): self {
		$this->city = $city;
		return $this;
	}
	/**
	 * @return ?string
	 */
	function getStreet(): ?string {
		return $this->street;
	}
	/**
	 * @param ?string $street 
	 * @return Client
	 */
	function setStreet(?string $street): self {
		$this->street = $street;
		return $this;
	}
	/**
	 * @return ?int
	 */
	function getZip(): ?int {
		return $this->zip;
	}
	/**
	 * @param ?int $zip 
	 * @return Client
	 */
	function setZip(?int $zip): self {
		$this->zip = $zip;
		return $this;
	}
	/**
	 * @return ?string
	 */
	function getMobile(): ?string {
		return $this->mobile;
	}
	/**
	 * @param ?string $mobile 
	 * @return Client
	 */
	function setMobile(?string $mobile): self {
		$this->mobile = $mobile;
		return $this;
	}
	/**
	 * @return ?string
	 */
	function getPhone(): ?string {
		return $this->phone;
	}
	/**
	 * @param ?string $phone 
	 * @return Client
	 */
	function setPhone(?string $phone): self {
		$this->phone = $phone;
		return $this;
	}
	/**
	 * @return ?string
	 */
	function getMail(): ?string {
		return $this->mail;
	}
	/**
	 * @param ?string $mail 
	 * @return Client
	 */
	function setMail(?string $mail): self {
		$this->mail = $mail;
		return $this;
	}
	/**
	 * @return ?string
	 */
	function getBirth_date(): ?string {
		return $this->birth_date;
	}
	/**
	 * @param ?string $birth_date 
	 * @return Client
	 */
	function setBirth_date(?string $birth_date): self {
		$this->birth_date = $birth_date;
		return $this;
	}
	/**
	 * @return ?string
	 */
	function getVat_number(): ?string {
		return $this->vat_number;
	}
	/**
	 * @param ?string $vat_number 
	 * @return Client
	 */
	function setVat_number(?string $vat_number): self {
		$this->vat_number = $vat_number;
		return $this;
	}
	/**
	 * @return ?string
	 */
	function getTax_id(): ?string {
		return $this->tax_id;
	}
	/**
	 * @param ?string $tax_id 
	 * @return Client
	 */
	function setTax_id(?string $tax_id): self {
		$this->tax_id = $tax_id;
		return $this;
	}
}