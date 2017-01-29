<?php
namespace Dompdf;

use Symfony\Component\OptionsResolver\OptionsResolver;

class Options
{
    /**
     * Mapping some option name alias not covered by just camelCase vs
     * underscore_separated naming
     *
     * @var array
     */
    public static $OPTION_ALIAS_NAMES = array(
        'enable_php' => 'isPhpEnabled',
        'enable_remote' => 'isRemotEnabled',
        'enable_javascript' => 'isJavascriptEnabled',
        'enable_html5_parser' => 'isHtml5ParserEnabled',
        'enable_font_subsetting' => 'isFontSubsettingEnabled'
    );

    /**
     * The root of your DOMPDF installation
     *
     * @var string $rootDir
     */

    /**
     * The location of a temporary directory.
     *
     * The directory specified must be writeable by the webserver process.
     * The temporary directory is required to download remote images and when
     * using the PFDLib back end.
     *
     * @var string $tempDir
     */

    /**
     * The location of the DOMPDF font directory
     *
     * The location of the directory where DOMPDF will store fonts and font metrics
     * Note: This directory must exist and be writable by the webserver process.
     *
     * @var string $fontDir
     */

    /**
     * The location of the DOMPDF font cache directory
     *
     * This directory contains the cached font metrics for the fonts used by DOMPDF.
     * This directory can be the same as $fontDir
     *
     * Note: This directory must exist and be writable by the webserver process.
     *
     * @var string $fontCache
     */

    /**
     * dompdf's "chroot"
     *
     * Prevents dompdf from accessing system files or other files on the webserver.
     * All local files opened by dompdf must be in a subdirectory of this directory.
     * DO NOT set it to '/' since this could allow an attacker to use dompdf to
     * read any files on the server.  This should be an absolute path.
     *
     * ==== IMPORTANT ====
     * This setting may increase the risk of system exploit. Do not change
     * this settings without understanding the consequences. Additional
     * documentation is available on the dompdf wiki at:
     * https://github.com/dompdf/dompdf/wiki
     *
     * @var string $chroot
     */

    /**
     * @var string $logOutputFile
     */

    /**
     * html target media view which should be rendered into pdf.
     * List of types and parsing rules for future extensions:
     * http://www.w3.org/TR/REC-html40/types.html
     *   screen, tty, tv, projection, handheld, print, braille, aural, all
     * Note: aural is deprecated in CSS 2.1 because it is replaced by speech in CSS 3.
     * Note, even though the generated pdf file is intended for print output,
     * the desired content might be different (e.g. screen or projection view of html file).
     * Therefore allow specification of content here.
     *
     * @var string $defaultMediaType  = "screen"
     */

    /**
     * The default paper size.
     *
     * North America standard is "letter"; other countries generally "a4"
     * @see \Dompdf\Adapter\CPDF::PAPER_SIZES for valid sizes
     *
     * @var string $defaultPaperSize = "letter"
     */

    /**
     * The default paper orientation.
     *
     * The orientation of the page (portrait or landscape).
     *
     * @var string $defaultPaperOrientation = "portrait"
     */

    /**
     * The default font family
     *
     * Used if no suitable fonts can be found. This must exist in the font folder.
     *
     * @var string $defaultFont = "serif"
     */

    /**
     * Image DPI setting
     *
     * This setting determines the default DPI setting for images and fonts.  The
     * DPI may be overridden for inline images by explictly setting the
     * image's width & height style attributes (i.e. if the image's native
     * width is 600 pixels and you specify the image's width as 72 points,
     * the image will have a DPI of 600 in the rendered PDF.  The DPI of
     * background images can not be overridden and is controlled entirely
     * via this parameter.
     *
     * For the purposes of DOMPDF, pixels per inch (PPI) = dots per inch (DPI).
     * If a size in html is given as px (or without unit as image size),
     * this tells the corresponding size in pt at 72 DPI.
     * This adjusts the relative sizes to be similar to the rendering of the
     * html page in a reference browser.
     *
     * In pdf, always 1 pt = 1/72 inch
     *
     * @var int $dpi = 96
     */

    /**
     * A ratio applied to the fonts height to be more like browsers' line height
     *
     * @var float $fontHeightRatio = 1.1
     */

    /**
     * Enable embedded PHP
     *
     * If this setting is set to true then DOMPDF will automatically evaluate
     * embedded PHP contained within <script type="text/php"> ... </script> tags.
     *
     * ==== IMPORTANT ====
     * Enabling this for documents you do not trust (e.g. arbitrary remote html
     * pages) is a security risk. Embedded scripts are run with the same level of
     * system access available to dompdf. Set this option to false (recommended)
     * if you wish to process untrusted documents.
     *
     * This setting may increase the risk of system exploit. Do not change
     * this settings without understanding the consequences. Additional
     * documentation is available on the dompdf wiki at:
     * https://github.com/dompdf/dompdf/wiki
     *
     * @var bool $isPhpEnabled = false
     */

    /**
     * Enable remote file access
     *
     * If this setting is set to true, DOMPDF will access remote sites for
     * images and CSS files as required.
     *
     * ==== IMPORTANT ====
     * This can be a security risk, in particular in combination with isPhpEnabled and
     * allowing remote html code to be passed to $dompdf = new DOMPDF(); $dompdf->load_html(...);
     * This allows anonymous users to download legally doubtful internet content which on
     * tracing back appears to being downloaded by your server, or allows malicious php code
     * in remote html pages to be executed by your server with your account privileges.
     *
     * This setting may increase the risk of system exploit. Do not change
     * this settings without understanding the consequences. Additional
     * documentation is available on the dompdf wiki at:
     * https://github.com/dompdf/dompdf/wiki
     *
     * @var bool  $isRemoteEnabled = false
     */

    /**
     * Enable inline Javascript
     *
     * If this setting is set to true then DOMPDF will automatically insert
     * JavaScript code contained within <script type="text/javascript"> ... </script> tags.
     *
     * @var bool $isJavascriptEnabled = true
     */

    /**
     * Use the more-than-experimental HTML5 Lib parser
     *
     * @var bool $isHtml5ParserEnabled = false
     */

    /**
     * Whether to enable font subsetting or not.
     *
     * @var bool $isFontSubsettingEnabled = false
     */

    /**
     * @var bool $debugPng = false
     */

    /**
     * @var bool $debugKeepTemp = false
     */

    /**
     * @var bool $debugCss = false
     */

    /**
     * @var bool $debugLayout = false
     */

    /**
     * @var bool $debugLayoutLines = true
     */

    /**
     * @var bool $debugLayoutBlocks = true
     */

    /**
     * @var bool $debugLayoutInline = true
     */

    /**
     * @var bool $debugLayoutPaddingBox = true
     */

    /**
     * The PDF rendering backend to use
     *
     * Valid settings are 'PDFLib', 'CPDF', 'GD', and 'auto'. 'auto' will
     * look for PDFLib and use it if found, or if not it will fall back on
     * CPDF. 'GD' renders PDFs to graphic files. {@link Dompdf\CanvasFactory}
     * ultimately determines which rendering class to instantiate
     * based on this setting.
     *
     * @var string $pdfBackend = "CPDF"
     */

    /**
     * PDFlib license key
     *
     * If you are using a licensed, commercial version of PDFlib, specify
     * your license key here.  If you are using PDFlib-Lite or are evaluating
     * the commercial version of PDFlib, comment out this setting.
     *
     * @link http://www.pdflib.com
     *
     * If pdflib present in web server and auto or selected explicitely above,
     * a real license code must exist!
     *
     * @var string $pdflibLicense = ""
     */

    /**
     * @var string $adminUsername = "user"
     * @deprecated
     */

    /**
     * @var string $adminPassword = "password"
     * @deprecated
     */

    /**
     * @var OptionsResolver
     */
    private $optionResolver;

    /**
     * @var array
     */
    private $options;

    /**
     * @param array $attributes
     *
     * @throws \Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException
     */
    public function __construct(array $attributes = array())
    {
        $this->optionResolver = new OptionsResolver();

        $chroot = realpath(__DIR__ . '/../');
        $fontDir  = $chroot . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'fonts';
        $tempDir = sys_get_temp_dir();

        $this->optionResolver->setDefaults(array(
            'rootDir' => $chroot,
            'tempDir' => $tempDir,
            'fontDir' => $fontDir,
            'fontCache' => $fontDir,
            'chroot' => $chroot,
            'logOutputFile' => $tempDir . DIRECTORY_SEPARATOR . 'log.htm',
            'defaultMediaType' => 'screen',
            'defaultPaperSize' => 'letter',
            'defaultPaperOrientation' => 'portrait',
            'defaultFont' => 'serif',
            'dpi' => 96,
            'fontHeightRatio' => 1.1,
            'isPhpEnabled' => false,
            'isRemoteEnabled' => false,
            'isJavascriptEnabled' => false,
            'isHtml5ParserEnabled' => false,
            'isFontSubsettingEnabled' => false,
            'debugPng' => false,
            'debugKeepTemp' => false,
            'debugCss' => false,
            'debugLayout' => false,
            'debugLayoutLines' => true,
            'debugLayoutBlocks' => true,
            'debugLayoutInline' => true,
            'debugLayoutPaddingBox' => true,
            'pdfBackend' => 'CPDF',
            'pdflibLicense' => '',
            'adminUsername' => 'user',
            'adminPassword' => 'password',
        ));

        $this->set($attributes);
    }

    /**
     * @param array|string $attributes
     * @param null|mixed $value
     * @return $this
     *
     * @throws \Symfony\Component\OptionsResolver\Exception\UndefinedOptionsException
     */
    public function set($attributes, $value = null)
    {
        if (!is_array($attributes)) {
            $attributes = array($attributes => $value);
        }

        $this->options = $this->optionResolver->resolve($this->optionNamesTranslation($attributes));

        return $this;
    }
    /**
     * @param string $key
     * @return mixed
     */
    public function get($key)
    {
        $key = $this->optionNameTranslation($key);
        if (!isset($this->options[$key])) {
            return null;
        }
        return $this->options[$key];
    }

    /**
     * @param string $rootDir
     * @return $this
     */
    public function setRootDir($rootDir)
    {
        $this->options['rootDir'] = $rootDir;
        return $this;
    }

    /**
     * @return string
     */
    public function getRootDir()
    {
        return $this->options['rootDir'];
    }

    /**
     * @param string $tempDir
     * @return $this
     */
    public function setTempDir($tempDir)
    {
        $this->options['tempDir'] = $tempDir;
        return $this;
    }

    /**
     * @return string
     */
    public function getTempDir()
    {
        return $this->options['tempDir'];
    }

    /**
     * @param string $fontDir
     * @return $this
     */
    public function setFontDir($fontDir)
    {
        $this->options['fontDir'] = $fontDir;
        return $this;
    }

    /**
     * @return string
     */
    public function getFontDir()
    {
        return $this->options['fontDir'];
    }

    /**
     * @param string $fontCache
     * @return $this
     */
    public function setFontCache($fontCache)
    {
        $$this->options['fontCache'] = $fontCache;
        return $this;
    }

    /**
     * @return string
     */
    public function getFontCache()
    {
        return $this->options['fontCache'];
    }

    /**
     * @param string $chroot
     * @return $this
     */
    public function setChroot($chroot)
    {
        $this->options['chroot'] = $chroot;
        return $this;
    }

    /**
     * @return string
     */
    public function getChroot()
    {
        return $this->options['chroot'];
    }

    /**
     * @param string $logOutputFile
     * @return $this
     */
    public function setLogOutputFile($logOutputFile)
    {
        $this->options['logOutputFile'] = $logOutputFile;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogOutputFile()
    {
        return $this->options['logOutputFile'];
    }

    /**
     * @param string $defaultMediaType
     * @return $this
     */
    public function setDefaultMediaType($defaultMediaType)
    {
        $this->options['defaultMediaType'] = $defaultMediaType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultMediaType()
    {
        return $this->options['defaultMediaType'];
    }

    /**
     * @param string $defaultPaperSize
     * @return $this
     */
    public function setDefaultPaperSize($defaultPaperSize)
    {
        $this->options['defaultPaperSize'] = $defaultPaperSize;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultPaperSize()
    {
        return $this->options['defaultPaperSize'];
    }

    /**
     * @param string $defaultPaperOrientation
     * @return $this
     */
    public function setDefaultPaperOrientation($defaultPaperOrientation)
    {
        $this->options['defaultPaperOrientation'] = $defaultPaperOrientation;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultPaperOrientation()
    {
        return $this->options['defaultPaperOrientation'];
    }

    /**
     * @param string $defaultFont
     * @return $this
     */
    public function setDefaultFont($defaultFont)
    {
        $this->options['defaultFont'] = $defaultFont;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultFont()
    {
        return $this->options['defaultFont'];
    }

    /**
     * @param int $dpi
     * @return $this
     */
    public function setDpi($dpi)
    {
        $this->options['dpi'] = $dpi;
        return $this;
    }

    /**
     * @return int
     */
    public function getDpi()
    {
        return $this->options['dpi'];
    }

    /**
     * @param float $fontHeightRatio
     * @return $this
     */
    public function setFontHeightRatio($fontHeightRatio)
    {
        $this->options['fontHeightRatio'] = $fontHeightRatio;
        return $this;
    }

    /**
     * @return float
     */
    public function getFontHeightRatio()
    {
        return $this->options['fontHeightRatio'];
    }

    /**
     * @param boolean $isPhpEnabled
     * @return $this
     */
    public function setIsPhpEnabled($isPhpEnabled)
    {
        $this->options['isPhpEnabled'] = $isPhpEnabled;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPhpEnabled()
    {
        return $this->options['isPhpEnabled'];
    }

    /**
     * @return boolean
     */
    public function isPhpEnabled()
    {
        return $this->getIsPhpEnabled();
    }

    /**
     * @param boolean $isRemoteEnabled
     * @return $this
     */
    public function setIsRemoteEnabled($isRemoteEnabled)
    {
        $this->options['isRemoteEnabled'] = $isRemoteEnabled;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRemoteEnabled()
    {
        return $this->options['isRemoteEnabled'];
    }

    /**
     * @return boolean
     */
    public function isRemoteEnabled()
    {
        return $this->getIsRemoteEnabled();
    }

    /**
     * @param boolean $isJavascriptEnabled
     * @return $this
     */
    public function setIsJavascriptEnabled($isJavascriptEnabled)
    {
        $this->options['isRemoteEnabled'] = $isJavascriptEnabled;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsJavascriptEnabled()
    {
        return $this->options['isRemoteEnabled'];
    }

    /**
     * @return boolean
     */
    public function isJavascriptEnabled()
    {
        return $this->getIsJavascriptEnabled();
    }

    /**
     * @param boolean $isHtml5ParserEnabled
     * @return $this
     */
    public function setIsHtml5ParserEnabled($isHtml5ParserEnabled)
    {
        $this->options['isHtml5ParserEnabled'] = $isHtml5ParserEnabled;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsHtml5ParserEnabled()
    {
        return $this->options['isHtml5ParserEnabled'];
    }

    /**
     * @return boolean
     */
    public function isHtml5ParserEnabled()
    {
        return $this->getIsHtml5ParserEnabled();
    }

    /**
     * @param boolean $isFontSubsettingEnabled
     * @return $this
     */
    public function setIsFontSubsettingEnabled($isFontSubsettingEnabled)
    {
        $this->options['isFontSubsettingEnabled'] = $isFontSubsettingEnabled;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFontSubsettingEnabled()
    {
        return $this->options['isFontSubsettingEnabled'];
    }

    /**
     * @return boolean
     */
    public function isFontSubsettingEnabled()
    {
        return $this->getIsFontSubsettingEnabled();
    }

    /**
     * @return boolean
     */
    public function getDebugLayoutPaddingBox()
    {
        return $this->options['debugLayoutPaddingBox'];
    }

    /**
     * @param boolean $debugPng
     * @return $this
     */
    public function setDebugPng($debugPng)
    {
        $this->options['debugPng'] = $debugPng;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDebugPng()
    {
        return $this->options['debugPng'];
    }

    /**
     * @param boolean $debugKeepTemp
     * @return $this
     */
    public function setDebugKeepTemp($debugKeepTemp)
    {
        $this->options['debugKeepTemp'] = $debugKeepTemp;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDebugKeepTemp()
    {
        return $this->options['debugKeepTemp'];
    }

    /**
     * @param boolean $debugCss
     * @return $this
     */
    public function setDebugCss($debugCss)
    {
        $this->options['debugCss'] = $debugCss;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDebugCss()
    {
        return $this->options['debugCss'];
    }

    /**
     * @param boolean $debugLayout
     * @return $this
     */
    public function setDebugLayout($debugLayout)
    {
        $this->options['debugLayout'] = $debugLayout;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDebugLayout()
    {
        return $this->options['debugLayout'];
    }

    /**
     * @param boolean $debugLayoutLines
     * @return $this
     */
    public function setDebugLayoutLines($debugLayoutLines)
    {
        $this->options['debugLayoutLines'] = $debugLayoutLines;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDebugLayoutLines()
    {
        return $this->options['debugLayoutLines'];
    }

    /**
     * @param boolean $debugLayoutBlocks
     * @return $this
     */
    public function setDebugLayoutBlocks($debugLayoutBlocks)
    {
        $this->options['debugLayoutBlocks'] = $debugLayoutBlocks;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDebugLayoutBlocks()
    {
        return$this->options['debugLayoutBlocks'];
    }

    /**
     * @param boolean $debugLayoutInline
     * @return $this
     */
    public function setDebugLayoutInline($debugLayoutInline)
    {
        $this->options['debugLayoutInline'] = $debugLayoutInline;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDebugLayoutInline()
    {
        return $this->options['debugLayoutInline'];
    }

    /**
     * @param boolean $debugLayoutPaddingBox
     * @return $this
     */
    public function setDebugLayoutPaddingBox($debugLayoutPaddingBox)
    {
        $this->options['debugLayoutPaddingBox'] = $debugLayoutPaddingBox;
        return $this;
    }

    /**
     * @param string $pdfBackend
     * @return $this
     */
    public function setPdfBackend($pdfBackend)
    {
        $this->options['pdfBackend'] = $pdfBackend;
        return $this;
    }

    /**
     * @return string
     */
    public function getPdfBackend()
    {
        return $this->options['pdfBackend'];
    }

    /**
     * @param string $pdflibLicense
     * @return $this
     */
    public function setPdflibLicense($pdflibLicense)
    {
        $this->options['pdflibLicense'] = $pdflibLicense;
        return $this;
    }

    /**
     * @return string
     */
    public function getPdflibLicense()
    {
        return $this->options['pdflibLicense'];
    }

    /**
     * @param string $adminUsername
     * @return $this
     */
    public function setAdminUsername($adminUsername)
    {
        $this->options['adminUsername'] = $adminUsername;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdminUsername()
    {
        return $this->options['adminUsername'];
    }

    /**
     * @param string $adminPassword
     * @return $this
     */
    public function setAdminPassword($adminPassword)
    {
        $this->options['adminPassword'] = $adminPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdminPassword()
    {
        return $this->options['adminPassword'];
    }

    /**
     * Check an option name and translate alias
     *
     * @param string $optionName
     * @return string
     */
    private function optionNameTranslation($optionName)
    {
        if (strpos($optionName, '_') !== false) {
            if (isset(self::$OPTION_ALIAS_NAMES[$optionName])) {
                return self::$OPTION_ALIAS_NAMES[$optionName];
            }
            return camel_case($optionName);
        }

        return $optionName;
    }

    /**
     * Returns the input array with translated option keys
     *
     * @param array $attributes
     * @return array
     */
    private function optionNamesTranslation(array $attributes)
    {
        $resAttributes = array();
        foreach ($attributes as $key => $value) {
            $resAttributes[$this->optionNameTranslation($key)] = $value;
        }

        return $resAttributes;
    }
}