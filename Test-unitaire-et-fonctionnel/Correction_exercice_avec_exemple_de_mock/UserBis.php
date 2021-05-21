<?php


use Carbon\Carbon;

class UserBis
{
    private string $email;
    private string $fname;
    private string $lname;
    private Carbon $birthday;
    private ExternalAPIs $externalAPIs;

    public function __construct(string $email, string $fname, string $lname, Carbon $birthday, ExternalAPIs $externalAPIs)
    {
        $this->email = $email;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->birthday = $birthday;
        $this->externalAPIs = $externalAPIs;
    }

    public function isValid(): bool
    {
        $this->externalAPIs->checkEmail($this->email);

        return !empty($this->fname)
            && !empty($this->lname)
            && !is_null($this->birthday)
            && $this->birthday->addYears(13)->isBefore(Carbon::now());
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFname(): string
    {
        return $this->fname;
    }

    /**
     * @param string $fname
     */
    public function setFname(string $fname): void
    {
        $this->fname = $fname;
    }

    /**
     * @return string
     */
    public function getLname(): string
    {
        return $this->lname;
    }

    /**
     * @param string $lname
     */
    public function setLname(string $lname): void
    {
        $this->lname = $lname;
    }

    /**
     * @return Carbon
     */
    public function getBirthday(): Carbon
    {
        return $this->birthday;
    }

    /**
     * @param Carbon $birthday
     */
    public function setBirthday(Carbon $birthday): void
    {
        $this->birthday = $birthday;
    }

}