<?php
/**
 * Created by PhpStorm.
 * User: jeremyclerot
 * Date: 06/11/2017
 * Time: 16:41
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Personne
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $surname;

    /**
     * @ORM\Column(type="text")
     */
    private $mail;
}

