<?php
/**
 * @package dompdf
 * @link    http://dompdf.github.com/
 * @author  Benj Carson <benjcarson@digitaljunkies.ca>
 * @author  Helmut Tischer <htischer@weihenstephan.org>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
namespace Dompdf\FrameDecorator;

use Dompdf\Dompdf;
use Dompdf\Frame;

/**
 * Decorates frames for list bullet rendering
 *
 * @package dompdf
 */
class ListBullet extends AbstractFrameDecorator
{

    public const BULLET_PADDING = 1; // Distance from bullet to text in pt
    // As fraction of font size (including descent). See also DECO_THICKNESS.
    public const BULLET_THICKNESS = 0.04; // Thickness of bullet outline. Screen: 0.08, print: better less, e.g. 0.04
    public const BULLET_DESCENT = 0.3; //descent of font below baseline. Todo: Guessed for now.
    public const BULLET_SIZE = 0.35; // bullet diameter. For now 0.5 of font_size without descent.

    static public $BULLET_TYPES = ["disc", "circle", "square"];

    /**
     * ListBullet constructor.
     * @param Frame $frame
     * @param Dompdf $dompdf
     */
    public function __construct(Frame $frame, Dompdf $dompdf)
    {
        parent::__construct($frame, $dompdf);
    }

    /**
     * @return float|int
     */
    public function get_margin_width()
    {
        $style = $this->_frame->get_style();

        if ($style->list_style_type === "none") {
            return 0;
        }

        return $style->font_size * self::BULLET_SIZE + 2 * self::BULLET_PADDING;
    }

    /**
     * hits only on "inset" lists items, to increase height of box
     *
     * @return float|int
     */
    public function get_margin_height()
    {
        $style = $this->_frame->get_style();

        if ($style->list_style_type === "none") {
            return 0;
        }

        return $style->font_size * self::BULLET_SIZE + 2 * self::BULLET_PADDING;
    }

    /**
     * @return float|int
     */
    public function get_width()
    {
        return $this->get_margin_width();
    }

    /**
     * @return float|int
     */
    public function get_height()
    {
        return $this->get_margin_height();
    }

    //........................................................................
}
