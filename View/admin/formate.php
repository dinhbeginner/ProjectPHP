<?php

class Format
{
    public function formatDate($date)
    {
        return date('F j, Y, g:i a', strtotime($date));
    }

    public function textShorten($text, $limit = 400)
    {
        $text = $text . ' ';
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text . '...';
        return $text;
    }

    public function validation($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function title()
    {
        $path = $_SERVER['SCRIPT_FILENAME'];
        $title = ucfirst(basename($path, '.php'));

        // You might want to customize titles for specific pages
        $customTitles = [
            'index' => 'Home',
            'contact' => 'Contact',
        ];

        return $customTitles[$title] ?? $title;
    }
}
?>
