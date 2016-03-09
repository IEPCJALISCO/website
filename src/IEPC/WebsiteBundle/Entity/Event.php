<?php namespace IEPC\WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use IEPC\ContentBundle\Entity\Content;

/**
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="IEPC\WebsiteBundle\Repository\EventRepository")
 *
 * @package IEPCWebsiteBundle
 */
class Event extends Content
{
    // <editor-fold defaultstate="collapsed" desc="Constants">
    // </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="Properties">

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    protected $content;

    // </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="Relations">
    // </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="Getter and setters">

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Page
     */
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    // </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="Functions">

    public function __construct() {
        parent::__construct();
        $this->setContent('');
    }

    public function renderHtml() {
        return $this->getContent();
    }

    public function renderJson() {
        // TODO: Implement renderJson() method.
    }

    public function __toString() {
        return self::class;
    }

    // </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="Static Functions">

    public static function getEntityName()
    {
        return 'Evento';
    }

    public static function getEntityNamePlural()
    {
        return 'Eventos';
    }

    // </editor-fold>
}