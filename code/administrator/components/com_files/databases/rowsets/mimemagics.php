<?php
/**
 * @version     $Id: mimemagics.php 2437 2011-08-05 13:50:18Z ercanozkaya $
 * @category	Nooku
 * @package     Nooku_Server
 * @subpackage  Files
 * @copyright   Copyright (C) 2011 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */

/**
 * Mimemagic Database Rowset Class
 *
 * @author      Ercan Ozkaya <http://nooku.assembla.com/profile/ercanozkaya>
 * @category	Nooku
 * @package     Nooku_Server
 * @subpackage  Files   
 */

class ComFilesDatabaseRowsetMimemagics extends KDatabaseRowsetAbstract
{
	public static $default = array(
		array(0, 30, "\145\166\141\154\40\42\145\170\145\143\40\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\160\145\162\154", 'application/x-perl'),
		array(0, 24, "\145\166\141\154\40\42\145\170\145\143\40\57\165\163\162\57\142\151\156\57\160\145\162\154", 'application/x-perl'),
		array(0, 23, "\103\157\155\155\157\156\40\163\165\142\144\151\162\145\143\164\157\162\151\145\163\72\40", 'text/x-patch'),
		array(0, 23, "\75\74\154\151\163\164\76\156\74\160\162\157\164\157\143\157\154\40\142\142\156\55\155", 'application/data'),
		array(0, 22, "\101\115\101\116\104\101\72\40\124\101\120\105\123\124\101\122\124\40\104\101\124\105", 'application/x-amanda-header'),
		array(0, 22, "\107\106\61\120\101\124\103\110\61\60\60\60\111\104\43\60\60\60\60\60\62\60", 'audio/x-gus-patch'),
		array(0, 22, "\107\106\61\120\101\124\103\110\61\61\60\60\111\104\43\60\60\60\60\60\62\60", 'audio/x-gus-patch'),
		array(0, 22, "\43\41\11\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\142\141\163\150", 'application/x-sh'),
		array(0, 22, "\43\41\11\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\147\141\167\153", 'application/x-awk'),
		array(0, 22, "\43\41\11\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\156\141\167\153", 'application/x-awk'),
		array(0, 22, "\43\41\11\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\160\145\162\154", 'application/x-perl'),
		array(0, 22, "\43\41\11\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\164\143\163\150", 'application/x-csh'),
		array(0, 22, "\43\41\40\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\142\141\163\150", 'application/x-sh'),
		array(0, 22, "\43\41\40\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\147\141\167\153", 'application/x-awk'),
		array(0, 22, "\43\41\40\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\156\141\167\153", 'application/x-awk'),
		array(0, 22, "\43\41\40\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\160\145\162\154", 'application/x-perl'),
		array(0, 22, "\43\41\40\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\164\143\163\150", 'application/x-csh'),
		array(0, 21, "\43\41\11\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\141\163\150", 'application/x-zsh'),
		array(0, 21, "\43\41\11\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\172\163\150", 'application/x-zsh'),
		array(0, 21, "\43\41\40\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\141\163\150", 'application/x-zsh'),
		array(0, 21, "\43\41\40\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\172\163\150", 'application/x-zsh'),
		array(0, 21, "\43\41\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\142\141\163\150", 'application/x-sh'),
		array(0, 21, "\43\41\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\147\141\167\153", 'application/x-awk'),
		array(0, 21, "\43\41\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\156\141\167\153", 'application/x-awk'),
		array(0, 21, "\43\41\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\160\145\162\154", 'application/x-perl'),
		array(0, 21, "\43\41\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\164\143\163\150", 'application/x-csh'),
		array(0, 20, "\145\166\141\154\40\42\145\170\145\143\40\57\142\151\156\57\160\145\162\154", 'application/x-perl'),
		array(0, 20, "\43\41\11\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\141\145", 'text/script'),
		array(0, 20, "\43\41\40\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\141\145", 'text/script'),
		array(0, 20, "\43\41\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\141\163\150", 'application/x-sh'),
		array(0, 20, "\43\41\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\172\163\150", 'application/x-zsh'),
		array(0, 19, "\103\162\145\141\164\151\166\145\40\126\157\151\143\145\40\106\151\154\145", 'audio/x-voc'),
		array(0, 19, "\41\74\141\162\143\150\76\156\137\137\137\137\137\137\137\137\137\137\105", 'application/x-ar'),
		array(0, 19, "\41\74\141\162\143\150\76\156\137\137\137\137\137\137\137\137\66\64\105", 'application/data'),
		array(0, 19, "\43\41\57\165\163\162\57\154\157\143\141\154\57\142\151\156\57\141\145", 'text/script'),
		array(0, 18, "\106\151\114\145\123\164\101\162\124\146\111\154\105\163\124\141\122\164", 'text/x-apple-binscii'),
		array(0, 18, "\43\41\40\57\165\163\162\57\154\157\143\141\154\57\164\143\163\150", 'application/x-csh'),
		array(0, 18, "\45\41\120\123\55\101\144\157\142\145\106\157\156\164\55\61\56\60", 'font/type1'),
		array(0, 17, "\43\41\57\165\163\162\57\154\157\143\141\154\57\164\143\163\150", 'application/x-csh'),
		array(0, 16, "\105\170\164\145\156\144\145\144\40\115\157\144\165\154\145\72", 'audio/x-ft2-mod'),
		array(0, 16, "\123\164\141\162\164\106\157\156\164\115\145\164\162\151\143\163", 'font/x-sunos-news'),
		array(0, 16, "\43\41\11\57\165\163\162\57\142\151\156\57\147\141\167\153", 'application/x-awk'),
		array(0, 16, "\43\41\11\57\165\163\162\57\142\151\156\57\156\141\167\153", 'application/x-awk'),
		array(0, 16, "\43\41\11\57\165\163\162\57\142\151\156\57\160\145\162\154", 'application/x-perl'),
		array(0, 16, "\43\41\40\57\165\163\162\57\142\151\156\57\147\141\167\153", 'application/x-awk'),
		array(0, 16, "\43\41\40\57\165\163\162\57\142\151\156\57\156\141\167\153", 'application/x-awk'),
		array(0, 16, "\43\41\40\57\165\163\162\57\142\151\156\57\160\145\162\154", 'application/x-perl'),
		array(0, 16, "\74\115\141\153\145\162\104\151\143\164\151\157\156\141\162\171", 'application/x-framemaker'),
		array(0, 16, "\74\115\141\153\145\162\123\143\162\145\145\156\106\157\156\164", 'font/x-framemaker'),
		array(0, 15, "\43\41\11\57\165\163\162\57\142\151\156\57\141\167\153", 'application/x-awk'),
		array(0, 15, "\43\41\40\57\165\163\162\57\142\151\156\57\141\167\153", 'application/x-awk'),
		array(0, 15, "\43\41\57\165\163\162\57\142\151\156\57\147\141\167\153", 'application/x-awk'),
		array(0, 15, "\43\41\57\165\163\162\57\142\151\156\57\156\141\167\153", 'application/x-awk'),
		array(0, 15, "\43\41\57\165\163\162\57\142\151\156\57\160\145\162\154", 'application/x-perl'),
		array(0, 14, "\41\74\141\162\143\150\76\156\144\145\142\151\141\156", 'application/x-dpkg'),
		array(0, 14, "\43\41\57\165\163\162\57\142\151\156\57\141\167\153", 'application/x-awk'),
		array(0, 14, "\74\41\104\117\103\124\131\120\105\40\110\124\115\114", 'text/html'),
		array(0, 14, "\74\41\144\157\143\164\171\160\145\40\150\164\155\154", 'text/html'),
		array(0, 13, "\107\111\115\120\40\107\162\141\144\151\145\156\164", 'application/x-gimp-gradient'),
		array(0, 12, "\122\145\164\165\162\156\55\120\141\164\150\72", 'message/rfc822'),
		array(0, 12, "\43\41\11\57\142\151\156\57\142\141\163\150", 'application/x-sh'),
		array(0, 12, "\43\41\11\57\142\151\156\57\147\141\167\153", 'application/x-awk'),
		array(0, 12, "\43\41\11\57\142\151\156\57\156\141\167\153", 'application/x-awk'),
		array(0, 12, "\43\41\11\57\142\151\156\57\160\145\162\154", 'application/x-perl'),
		array(0, 12, "\43\41\11\57\142\151\156\57\164\143\163\150", 'application/x-csh'),
		array(0, 12, "\43\41\40\57\142\151\156\57\142\141\163\150", 'application/x-sh'),
		array(0, 12, "\43\41\40\57\142\151\156\57\147\141\167\153", 'application/x-awk'),
		array(0, 12, "\43\41\40\57\142\151\156\57\156\141\167\153", 'application/x-awk'),
		array(0, 12, "\43\41\40\57\142\151\156\57\160\145\162\154", 'application/x-perl'),
		array(0, 12, "\43\41\40\57\142\151\156\57\164\143\163\150", 'application/x-csh'),
		array(0, 11, "\43\41\11\57\142\151\156\57\141\167\153", 'application/x-awk'),
		array(0, 11, "\43\41\11\57\142\151\156\57\143\163\150", 'application/x-csh'),
		array(0, 11, "\43\41\11\57\142\151\156\57\153\163\150", 'application/x-ksh'),
		array(0, 11, "\43\41\40\57\142\151\156\57\141\167\153", 'application/x-awk'),
		array(0, 11, "\43\41\40\57\142\151\156\57\143\163\150", 'application/x-csh'),
		array(0, 11, "\43\41\40\57\142\151\156\57\153\163\150", 'application/x-ksh'),
		array(0, 11, "\43\41\57\142\151\156\57\142\141\163\150", 'application/x-sh'),
		array(0, 11, "\43\41\57\142\151\156\57\147\141\167\153", 'application/x-awk'),
		array(0, 11, "\43\41\57\142\151\156\57\156\141\167\153", 'application/x-awk'),
		array(0, 11, "\43\41\57\142\151\156\57\160\145\162\154", 'application/x-perl'),
		array(0, 11, "\43\41\57\142\151\156\57\164\143\163\150", 'application/x-csh'),
		array(0, 10, "\102\151\164\155\141\160\146\151\154\145", 'image/unknown'),
		array(0, 10, "\123\124\101\122\124\106\117\116\124\40", 'font/x-bdf'),
		array(0, 10, "\43\41\11\57\142\151\156\57\162\143", 'text/script'),
		array(0, 10, "\43\41\11\57\142\151\156\57\163\150", 'application/x-sh'),
		array(0, 10, "\43\41\40\57\142\151\156\57\162\143", 'text/script'),
		array(0, 10, "\43\41\40\57\142\151\156\57\163\150", 'application/x-sh'),
		array(0, 10, "\43\41\57\142\151\156\57\141\167\153", 'application/x-awk'),
		array(0, 10, "\43\41\57\142\151\156\57\143\163\150", 'application/x-csh'),
		array(0, 10, "\43\41\57\142\151\156\57\153\163\150", 'application/x-ksh'),
		array(0, 10, "\74\115\141\153\145\162\106\151\154\145", 'application/x-framemaker'),
		array(0, 9, "\122\145\143\145\151\166\145\144\72", 'message/rfc822'),
		array(0, 9, "\123\164\141\162\164\106\157\156\164", 'font/x-sunos-news'),
		array(0, 9, "\211\114\132\117\0\15\12\32\12", 'application/data'),
		array(0, 9, "\43\41\57\142\151\156\57\162\143", 'text/script'),
		array(0, 9, "\43\41\57\142\151\156\57\163\150", 'application/x-sh'),
		array(0, 9, "\55\162\157\155\61\146\163\55\60", 'application/x-filesystem'),
		array(0, 9, "\74\102\157\157\153\106\151\154\145", 'application/x-framemaker'),
		array(0, 8, "\117\156\154\171\40\151\156\40", 'text/x-patch'),
		array(0, 8, "\147\151\155\160\40\170\143\146", 'application/x-gimp-image'),
		array(0, 8, "\155\163\147\143\141\164\60\61", 'application/x-locale'),
		array(0, 8, "\32\141\162\143\150\151\166\145", 'application/data'),
		array(0, 8, "\41\74\120\104\106\76\41\156", 'application/x-prof'),
		array(0, 8, "\74\115\111\106\106\151\154\145", 'application/x-framemaker'),
		array(0, 7, "\101\162\164\151\143\154\145", 'message/news'),
		array(0, 7, "\120\103\104\137\117\120\101", 'x/x-photo-cd-overfiew-file'),
		array(0, 7, "\351\54\1\112\101\115\11", 'application/data'),
		array(0, 7, "\41\74\141\162\143\150\76", 'application/x-ar'),
		array(0, 7, "\72\40\163\150\145\154\154", 'application/data'),
		array(0, 6, "\116\165\106\151\154\145", 'application/data'),
		array(0, 6, "\116\365\106\351\154\345", 'application/data'),
		array(0, 6, "\60\67\60\67\60\61", 'application/x-cpio'),
		array(0, 6, "\60\67\60\67\60\62", 'application/x-cpio'),
		array(0, 6, "\60\67\60\67\60\67", 'application/x-cpio'),
		array(0, 6, "\74\115\141\153\145\162", 'application/x-framemaker'),
		array(0, 6, "\74\124\111\124\114\105", 'text/html'),
		array(0, 6, "\74\164\151\164\154\145", 'text/html'),
		array(0, 5, "\0\1\0\0\0", 'font/ttf'),
		array(0, 5, "\0\4\36\212\200", 'application/core'),
		array(0, 5, "\102\101\102\131\114", 'message/x-gnu-rmail'),
		array(0, 5, "\102\105\107\111\116", 'application/x-awk'),
		array(0, 5, "\103\157\162\145\1", 'application/x-executable-file'),
		array(0, 5, "\104\61\56\60\15", 'font/x-speedo'),
		array(0, 5, "\106\162\157\155\72", 'message/rfc822'),
		array(0, 5, "\115\101\123\137\125", 'audio/x-multimate-mod'),
		array(0, 5, "\120\117\136\121\140", 'text/vnd.ms-word'),
		array(0, 5, "\120\141\164\150\72", 'message/news'),
		array(0, 5, "\130\162\145\146\72", 'message/news'),
		array(0, 5, "\144\151\146\146\40", 'text/x-patch'),
		array(0, 5, "\225\64\62\62\336", 'application/x-locale'),
		array(0, 5, "\336\62\62\64\225", 'application/x-locale'),
		array(0, 5, "\74\110\105\101\104", 'text/html'),
		array(0, 5, "\74\110\124\115\114", 'text/html'),
		array(0, 5, "\74\150\145\141\144", 'text/html'),
		array(0, 5, "\74\150\164\155\154", 'text/html'),
		array(0, 5, "\75\74\141\162\76", 'application/x-ar'),
		array(0, 4, "\0\0\0\314", 'application/x-executable-file'),
		array(0, 4, "\0\0\0\4", 'font/x-snf'),
		array(0, 4, "\0\0\1\107", 'application/x-object-file'),
		array(0, 4, "\0\0\1\113", 'application/x-executable-file'),
		array(0, 4, "\0\0\1\115", 'application/x-executable-file'),
		array(0, 4, "\0\0\1\117", 'application/x-executable-file'),
		array(0, 4, "\0\0\1\201", 'application/x-object-file'),
		array(0, 4, "\0\0\1\207", 'application/data'),
		array(0, 4, "\0\0\1\263", 'video/mpeg'),
		array(0, 4, "\0\0\1\272", 'video/mpeg'),
		array(0, 4, "\0\0\1\6", 'application/x-executable-file'),
		array(0, 4, "\0\0\201\154", 'application/x-apl-workspace'),
		array(0, 4, "\0\0\377\145", 'application/x-library-file'),
		array(0, 4, "\0\0\377\155", 'application/data'),
		array(0, 4, "\0\0\3\347", 'application/x-library-file'),
		array(0, 4, "\0\0\3\363", 'application/x-executable-file'),
		array(0, 4, "\0\144\163\56", 'audio/basic'),
		array(0, 4, "\0\1\22\127", 'application/core'),
		array(0, 4, "\0\22\326\207", 'image/x11'),
		array(0, 4, "\0\3\233\355", 'application/data'),
		array(0, 4, "\0\3\233\356", 'application/data'),
		array(0, 4, "\0\5\26\0", 'application/data'),
		array(0, 4, "\0\5\26\7", 'application/data'),
		array(0, 4, "\0\5\61\142", 'application/x-db'),
		array(0, 4, "\0\6\25\141", 'application/x-db'),
		array(0, 4, "\103\124\115\106", 'audio/x-cmf'),
		array(0, 4, "\105\115\117\104", 'audio/x-emod'),
		array(0, 4, "\106\106\111\114", 'font/ttf'),
		array(0, 4, "\106\117\116\124", 'font/x-vfont'),
		array(0, 4, "\107\104\102\115", 'application/x-gdbm'),
		array(0, 4, "\107\111\106\70", 'image/gif'),
		array(0, 4, "\10\16\12\17", 'application/data'),
		array(0, 4, "\110\120\101\113", 'application/data'),
		array(0, 4, "\111\111\116\61", 'image/tiff'),
		array(0, 4, "\111\111\52\0", 'image/tiff'),
		array(0, 4, "\114\104\110\151", 'application/data'),
		array(0, 4, "\114\127\106\116", 'font/type1'),
		array(0, 4, "\115\115\0\52", 'image/tiff'),
		array(0, 4, "\115\117\126\111", 'video/x-sgi-movie'),
		array(0, 4, "\115\124\150\144", 'audio/midi'),
		array(0, 4, "\115\247\356\350", 'font/x-hp-windows'),
		array(0, 4, "\116\124\122\113", 'audio/x-multitrack'),
		array(0, 4, "\120\113\3\4", 'application/zip'),
		array(0, 4, "\122\111\106\106", 'audio/x-wav'),
		array(0, 4, "\122\141\162\41", 'application/x-rar'),
		array(0, 4, "\123\121\123\110", 'application/data'),
		array(0, 4, "\124\101\104\123", 'application/x-tads-game'),
		array(0, 4, "\125\103\62\32", 'application/data'),
		array(0, 4, "\125\116\60\65", 'audio/x-mikmod-uni'),
		array(0, 4, "\12\17\10\16", 'application/data'),
		array(0, 4, "\131\246\152\225", 'x/x-image-sun-raster'),
		array(0, 4, "\145\377\0\0", 'application/x-ar'),
		array(0, 4, "\150\163\151\61", 'image/x-jpeg-proprietary'),
		array(0, 4, "\16\10\17\12", 'application/data'),
		array(0, 4, "\177\105\114\106", 'application/x-executable-file'),
		array(0, 4, "\17\12\16\10", 'application/data'),
		array(0, 4, "\1\130\41\246", 'application/core'),
		array(0, 4, "\1\146\143\160", 'font/x-pcf'),
		array(0, 4, "\211\120\116\107", 'image/png'),
		array(0, 4, "\23\127\232\316", 'application/x-gdbm'),
		array(0, 4, "\23\172\51\104", 'font/x-sunos-news'),
		array(0, 4, "\23\172\51\107", 'font/x-sunos-news'),
		array(0, 4, "\23\172\51\120", 'font/x-sunos-news'),
		array(0, 4, "\23\172\51\121", 'font/x-sunos-news'),
		array(0, 4, "\24\2\131\31", 'font/x-libgrx'),
		array(0, 4, "\260\61\63\140", 'application/x-bootable'),
		array(0, 4, "\2\10\1\10", 'application/x-executable-file'),
		array(0, 4, "\2\10\1\6", 'application/x-executable-file'),
		array(0, 4, "\2\10\1\7", 'application/x-executable-file'),
		array(0, 4, "\2\10\377\145", 'application/x-library-file'),
		array(0, 4, "\2\12\1\10", 'application/x-executable-file'),
		array(0, 4, "\2\12\1\7", 'application/x-executable-file'),
		array(0, 4, "\2\12\377\145", 'application/x-library-file'),
		array(0, 4, "\2\13\1\10", 'application/x-executable-file'),
		array(0, 4, "\2\13\1\13", 'application/x-executable-file'),
		array(0, 4, "\2\13\1\15", 'application/x-library-file'),
		array(0, 4, "\2\13\1\16", 'application/x-library-file'),
		array(0, 4, "\2\13\1\6", 'application/x-object-file'),
		array(0, 4, "\2\13\1\7", 'application/x-executable-file'),
		array(0, 4, "\2\14\1\10", 'application/x-executable-file'),
		array(0, 4, "\2\14\1\13", 'application/x-executable-file'),
		array(0, 4, "\2\14\1\14", 'application/x-lisp'),
		array(0, 4, "\2\14\1\15", 'application/x-library-file'),
		array(0, 4, "\2\14\1\16", 'application/x-library-file'),
		array(0, 4, "\2\14\1\6", 'application/x-executable-file'),
		array(0, 4, "\2\14\1\7", 'application/x-executable-file'),
		array(0, 4, "\2\14\377\145", 'application/x-library-file'),
		array(0, 4, "\2\20\1\10", 'application/x-executable-file'),
		array(0, 4, "\2\20\1\13", 'application/x-executable-file'),
		array(0, 4, "\2\20\1\15", 'application/x-library-file'),
		array(0, 4, "\2\20\1\16", 'application/x-library-file'),
		array(0, 4, "\2\20\1\6", 'application/x-object-file'),
		array(0, 4, "\2\20\1\7", 'application/x-executable-file'),
		array(0, 4, "\2\24\1\10", 'application/x-executable-file'),
		array(0, 4, "\2\24\1\13", 'application/x-executable-file'),
		array(0, 4, "\2\24\1\15", 'application/x-object-file'),
		array(0, 4, "\2\24\1\16", 'application/x-library-file'),
		array(0, 4, "\2\24\1\6", 'application/x-object-file'),
		array(0, 4, "\2\24\1\7", 'application/x-executable-file'),
		array(0, 4, "\361\60\100\273", 'image/x-cmu-raster'),
		array(0, 4, "\366\366\366\366", 'application/x-pc-floppy'),
		array(0, 4, "\377\106\117\116", 'font/x-dos'),
		array(0, 4, "\41\74\141\162", 'application/x-ar'),
		array(0, 4, "\43\41\11\57", 'text/script'),
		array(0, 4, "\43\41\40\57", 'text/script'),
		array(0, 4, "\52\123\124\101", 'application/data'),
		array(0, 4, "\52\52\52\40", 'text/x-patch'),
		array(0, 4, "\56\162\141\375", 'audio/x-pn-realaudio'),
		array(0, 4, "\56\163\156\144", 'audio/basic'),
		array(0, 4, "\61\143\167\40", 'application/data'),
		array(0, 4, "\61\276\0\0", 'text/vnd.ms-word'),
		array(0, 4, "\62\62\67\70", 'application/data'),
		array(0, 4, "\74\115\115\114", 'application/x-framemaker'),
		array(0, 4, "\74\141\162\76", 'application/x-ar'),
		array(0, 3, "\102\132\150", 'application/x-bzip2'),
		array(0, 3, "\106\101\122", 'audio/mod'),
		array(0, 3, "\115\124\115", 'audio/x-multitrack'),
		array(0, 3, "\123\102\111", 'audio/x-sbi'),
		array(0, 3, "\124\117\103", 'audio/x-toc'),
		array(0, 3, "\12\107\114", 'application/data'),
		array(0, 3, "\146\154\143", 'application/x-font'),
		array(0, 3, "\146\154\146", 'font/x-figlet'),
		array(0, 3, "\33\105\33", 'image/x-pcl-hp'),
		array(0, 3, "\33\143\33", 'application/data'),
		array(0, 3, "\377\377\174", 'application/data'),
		array(0, 3, "\377\377\176", 'application/data'),
		array(0, 3, "\377\377\177", 'application/data'),
		array(0, 3, "\43\41\40", 'text/script'),
		array(0, 3, "\43\41\57", 'text/script'),
		array(0, 3, "\4\45\41", 'application/postscript'),
		array(0, 3, "\55\150\55", 'application/data'),
		array(0, 3, "\61\143\167", 'application/data'),
		array(0, 2, "\0\0", 'application/x-executable-file'),
		array(0, 2, "\102\115", 'image/x-bmp'),
		array(0, 2, "\102\132", 'application/x-bzip'),
		array(0, 2, "\111\103", 'image/x-ico'),
		array(0, 2, "\112\116", 'audio/x-669-mod'),
		array(0, 2, "\115\132", 'application/x-ms-dos-executable'),
		array(0, 2, "\120\61", 'image/x-portable-bitmap'),
		array(0, 2, "\120\62", 'image/x-portable-graymap'),
		array(0, 2, "\120\63", 'image/x-portable-pixmap'),
		array(0, 2, "\120\64", 'image/x-portable-bitmap'),
		array(0, 2, "\120\65", 'image/x-portable-graymap'),
		array(0, 2, "\120\66", 'image/x-portable-pixmap'),
		array(0, 2, "\151\146", 'audio/x-669-mod'),
		array(0, 2, "\161\307", 'application/x-cpio'),
		array(0, 2, "\166\377", 'application/data'),
		array(0, 2, "\1\110", 'application/x-executable-file'),
		array(0, 2, "\1\111", 'application/x-executable-file'),
		array(0, 2, "\1\124", 'application/data'),
		array(0, 2, "\1\125", 'application/x-executable-file'),
		array(0, 2, "\1\160", 'application/x-executable-file'),
		array(0, 2, "\1\161", 'application/x-executable-file'),
		array(0, 2, "\1\175", 'application/x-executable-file'),
		array(0, 2, "\1\177", 'application/x-executable-file'),
		array(0, 2, "\1\20", 'application/x-executable-file'),
		array(0, 2, "\1\203", 'application/x-executable-file'),
		array(0, 2, "\1\21", 'application/x-executable-file'),
		array(0, 2, "\1\210", 'application/x-executable-file'),
		array(0, 2, "\1\217", 'application/x-object-file'),
		array(0, 2, "\1\224", 'application/x-executable-file'),
		array(0, 2, "\1\227", 'application/x-executable-file'),
		array(0, 2, "\1\332", 'x/x-image-sgi'),
		array(0, 2, "\1\36", 'font/x-vfont'),
		array(0, 2, "\1\6", 'application/x-executable-file'),
		array(0, 2, "\307\161", 'application/x-bcpio'),
		array(0, 2, "\313\5", 'application/data'),
		array(0, 2, "\352\140", 'application/x-arj'),
		array(0, 2, "\367\131", 'font/x-tex'),
		array(0, 2, "\367\203", 'font/x-tex'),
		array(0, 2, "\367\312", 'font/x-tex'),
		array(0, 2, "\36\1", 'font/x-vfont'),
		array(0, 2, "\375\166", 'application/x-lzh'),
		array(0, 2, "\376\166", 'application/data'),
		array(0, 2, "\377\145", 'application/data'),
		array(0, 2, "\377\155", 'application/data'),
		array(0, 2, "\377\166", 'application/data'),
		array(0, 2, "\377\330", 'image/jpeg'),
		array(0, 2, "\377\37", 'application/data'),
		array(0, 2, "\37\213", 'application/x-gzip'),
		array(0, 2, "\37\235", 'application/compress'),
		array(0, 2, "\37\236", 'application/data'),
		array(0, 2, "\37\237", 'application/data'),
		array(0, 2, "\37\240", 'application/data'),
		array(0, 2, "\37\36", 'application/data'),
		array(0, 2, "\37\37", 'application/data'),
		array(0, 2, "\37\377", 'application/data'),
		array(0, 2, "\45\41", 'application/postscript'),
		array(0, 2, "\4\66", 'font/linux-psf'),
		array(0, 2, "\57\57", 'text/cpp'),
		array(0, 2, "\5\1", 'application/x-locale'),
		array(0, 2, "\6\1", 'application/x-executable-file'),
		array(0, 2, "\6\2", 'application/x-alan-adventure-game'),
		array(0, 2, "\7\1", 'application/x-executable-file'),
		array(1, 3, "\120\116\107", 'image/png'),
		array(1, 3, "\127\120\103", 'application/vnd.wordperfect'),
		array(2, 6, "\55\154\150\64\60\55", 'application/x-lha'),
		array(2, 5, "\55\154\150\144\55", 'application/x-lha'),
		array(2, 5, "\55\154\150\60\55", 'application/x-lha'),
		array(2, 5, "\55\154\150\61\55", 'application/x-lha'),
		array(2, 5, "\55\154\150\62\55", 'application/x-lha'),
		array(2, 5, "\55\154\150\63\55", 'application/x-lha'),
		array(2, 5, "\55\154\150\64\55", 'application/x-lha'),
		array(2, 5, "\55\154\150\65\55", 'application/x-lha'),
		array(2, 5, "\55\154\172\163\55", 'application/x-lha'),
		array(2, 5, "\55\154\172\64\55", 'application/x-lha'),
		array(2, 5, "\55\154\172\65\55", 'application/x-lha'),
		array(2, 2, "\0\21", 'font/x-tex-tfm'),
		array(2, 2, "\0\22", 'font/x-tex-tfm'),
		array(4, 4, "\155\144\141\164", 'video/quicktime'),
		array(4, 4, "\155\157\157\166", 'video/quicktime'),
		array(4, 4, "\160\151\160\145", 'application/data'),
		array(4, 4, "\160\162\157\146", 'application/data'),
		array(4, 2, "\257\21", 'video/fli'),
		array(4, 2, "\257\22", 'video/flc'),
		array(6, 18, "\45\41\120\123\55\101\144\157\142\145\106\157\156\164\55\61\56\60", 'font/type1'),
		array(7, 22, "\357\20\60\60\60\60\60\60\60\60\60\60\60\60\60\60\60\60\60\60\60\60", 'application/core'),
		array(7, 4, "\0\105\107\101", 'font/x-dos'),
		array(7, 4, "\0\126\111\104", 'font/x-dos'),
		array(8, 4, "\23\172\53\105", 'font/x-sunos-news'),
		array(8, 4, "\23\172\53\110", 'font/x-sunos-news'),
		array(10, 25, "\43\40\124\150\151\163\40\151\163\40\141\40\163\150\145\154\154\40\141\162\143\150\151\166\145", 'application/x-shar'),
		array(20, 4, "\107\111\115\120", 'application/x-gimp-brush'),
		array(20, 4, "\107\120\101\124", 'application/x-gimp-pattern'),
		array(20, 4, "\375\304\247\334", 'application/x-zoo'),
		array(21, 8, "\41\123\103\122\105\101\115\41", 'audio/x-st2-mod'),
		array(24, 4, "\0\0\352\153", 'application/x-dump'),
		array(24, 4, "\0\0\352\154", 'application/x-dump'),
		array(24, 4, "\0\0\352\155", 'application/data'),
		array(24, 4, "\0\0\352\156", 'application/data'),
		array(65, 4, "\106\106\111\114", 'font/ttf'),
		array(65, 4, "\114\127\106\116", 'font/type1'),
		array(257, 8, "\165\163\164\141\162\40\40\60", 'application/x-gtar'),
		array(257, 6, "\165\163\164\141\162\60", 'application/x-tar'),
		array(0774, 2, "\332\276", 'application/data'),
		array(1080, 4, "\103\104\70\61", 'audio/x-oktalyzer-mod'),
		array(1080, 4, "\106\114\124\64", 'audio/x-startracker-mod'),
		array(1080, 4, "\115\41\113\41", 'audio/x-protracker-mod'),
		array(1080, 4, "\115\56\113\56", 'audio/x-protracker-mod'),
		array(1080, 4, "\117\113\124\101", 'audio/x-oktalyzer-mod'),
		array(1080, 4, "\61\66\103\116", 'audio/x-taketracker-mod'),
		array(1080, 4, "\63\62\103\116", 'audio/x-taketracker-mod'),
		array(1080, 4, "\64\103\110\116", 'audio/x-fasttracker-mod'),
		array(1080, 4, "\66\103\110\116", 'audio/x-fasttracker-mod'),
		array(1080, 4, "\70\103\110\116", 'audio/x-fasttracker-mod'),
		array(2048, 7, "\120\103\104\137\111\120\111", 'x/x-photo-cd-pack-file'),
		array(2080, 29, "\115\151\143\162\157\163\157\146\164\40\105\170\143\145\154\40\65\56\60\40\127\157\162\153\163\150\145\145\164", 'application/vnd.ms-excel'),
		array(2080, 27, "\115\151\143\162\157\163\157\146\164\40\127\157\162\144\40\66\56\60\40\104\157\143\165\155\145\156\164", 'text/vnd.ms-word'),
		array(2080, 26, "\104\157\143\165\155\145\156\164\157\40\115\151\143\162\157\163\157\146\164\40\127\157\162\144\40\66", 'text/vnd.ms-word'),
		array(2112, 9, "\115\123\127\157\162\144\104\157\143", 'text/vnd.ms-word'),
		array(2114, 5, "\102\151\146\146\65", 'application/vnd.ms-excel'),
		array(4098, 7, "\104\117\123\106\117\116\124", 'font/x-dos'),
		array(68158480, 2, "\23\177", 'application/x-filesystem'),
		array(68158480, 2, "\23\217", 'application/x-filesystem'),
		array(68158480, 2, "\44\150", 'application/x-filesystem'),
		array(68158480, 2, "\44\170", 'application/x-filesystem'),
		array(70779960, 2, "\357\123", 'application/x-linux-ext2fs')
	);

	public function __construct($config = array())
	{
		parent::__construct($config);

		if ($config->load_data) {
			$this->addRows(self::$default, $config->new);
		}
	}

	protected function _initialize(KConfig $config)
	{
		$config->append(array(
			'load_data' => true
		));

		parent::_initialize($config);
	}

	/**
	 * Add rows to the rowset
	 *
	 * @param  array  	An associative array of row data to be inserted.
	 * @param  boolean	If TRUE, mark the row(s) as new (i.e. not in the database yet). Default TRUE
	 * @return void
	 * @see __construct
	 */
	public function addRows(array $data, $new = true)
	{
		//Set the data in the row object and insert the row
		foreach ($data as $k => $row) {
			$this->_data[] = $row;
		}
	}

    public function getData($modified = false)
    {
    	return $this->_data;
    }
}
