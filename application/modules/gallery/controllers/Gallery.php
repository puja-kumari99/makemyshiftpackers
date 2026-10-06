<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    
    public function __construct() {
        parent::__construct();
        try {
            $this->load->database();
        } catch (Throwable $e) {}
    }

    function photo_gallery()
    {
        $data['title'] = "Gallery | " . $this->comp['company3'];
        $data['description'] = "Explore visual highlights of our cargo handling, warehouse storage, specialized container fleets, and global logistics operations at " . $this->comp['company3'] . ".";
        
        $photos = [];
        try {
            if (!isset($this->db) || !is_object($this->db)) {
                $this->load->database();
            }
            if (isset($this->db) && is_object($this->db)) {
                $this->db->where('status', 1);
                $this->db->order_by('auto_id', 'DESC');
                $query = $this->db->get('gallery');
                if ($query && $query->num_rows() > 0) {
                    $photos = $query->result();
                }
            }
        } catch (Throwable $e) {}

        if (empty($photos)) {
            try {
                $dbPath = FCPATH . 'application/database.php';
                if (file_exists($dbPath)) {
                    $sqlite = new SQLite3($dbPath);
                    $res = @$sqlite->query("SELECT * FROM gallery WHERE status = 1 ORDER BY auto_id DESC");
                    if ($res) {
                        while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
                            $photos[] = (object)$row;
                        }
                    }
                }
            } catch (Throwable $e) {}
        }

        $data['photos'] = $photos;
        $data['module'] = "gallery";
        $data['view_file'] = "photo-gallery";
        echo Modules::run('template/layout2', $data);
    }

    function video_gallery()
    {
        $data['title'] = "Video Gallery | " . $this->comp['company3'];
        $data['description'] = "Watch our step-by-step cargo handling processes, transport safety standards, and global freight forwarding operations in action at " . $this->comp['company3'] . ".";
        
        $videos = [];
        try {
            if (!isset($this->db) || !is_object($this->db)) {
                $this->load->database();
            }
            if (isset($this->db) && is_object($this->db)) {
                $this->db->where('status', 1);
                $this->db->order_by('auto_id', 'DESC');
                $query = $this->db->get('video_gallery');
                if ($query && $query->num_rows() > 0) {
                    $videos = $query->result();
                }
            }
        } catch (Throwable $e) {}

        if (empty($videos)) {
            try {
                $dbPath = FCPATH . 'application/database.php';
                if (file_exists($dbPath)) {
                    $sqlite = new SQLite3($dbPath);
                    $res = @$sqlite->query("SELECT * FROM video_gallery WHERE status = 1 ORDER BY auto_id DESC");
                    if ($res) {
                        while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
                            $videos[] = (object)$row;
                        }
                    }
                }
            } catch (Throwable $e) {}
        }

        $data['videos'] = $videos;
        $data['module'] = "gallery";
        $data['view_file'] = "video-gallery";
        echo Modules::run('template/layout2', $data);
    }
}