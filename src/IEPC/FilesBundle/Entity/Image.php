<?php namespace IEPC\FilesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="IEPC\FilesBundle\Repository\FileRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table()
 */
class Image extends File
{
    // <editor-fold defaultstate="collapsed" desc="Constants">
    // </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="Properties">
    // </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="Relations">
    // </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="Getter and setters">
    // </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="Functions">
    // </editor-fold>
}