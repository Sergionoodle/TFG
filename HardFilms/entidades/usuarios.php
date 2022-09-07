<?php

class usuarios
{

    private int $id;
    private string $user;
    private string $mail;
    private string $password;

    /**
     * @param int $id
     * @param string $user
     * @param string $mail
     * @param string $password
     */
    public function __construct(int $id, string $user, string $mail, string $password)
    {
        $this->id = $id;
        $this->user = $user;
        $this->mail = $mail;
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }


}