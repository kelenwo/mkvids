<?php

namespace App\Controllers;
use App\Models\MovieModel;
use Cassandra\Date;
use CodeIgniter\Database\RawSql;

class Admin extends BaseController
{
    public function __construct()
    {

        $this->usersTable();
        $this->moviesTable();
        $this->seriesTable();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        return view('admin/index');
    }

    public function movies()
    {
        $db = \Config\Database::connect();
        $data['title'] = 'All Movies';
        $data['movies'] = $db->table('movies')->get()->getResult();
        return view('admin/movies',$data);
    }

    public function addMovie()
    {

        return view('admin/addMovie');
    }
    public function saveMovie() {
        // Validate the file upload
        $file = $this->request->getFile('thumbnail');
        if ($file->isValid()) {
            // Check the file type
            if ($file->getMimeType() === 'image/jpeg' || $file->getMimeType() === 'image/png') {
                // Generate a random file name
                $filename = md5(uniqid()) . '.' . $file->getExtension();

                // Move the file to the upload directory
                $file->move('uploads/thumbnails', $filename);

                $model = new MovieModel();
                $data = [
                    'title' => $this->request->getPost('title'),
                    'genre' => $this->request->getPost('genre'),
                    'duration' => $this->request->getPost('duration'),
                    'country'  => $this->request->getPost('country'),
                    'quality' => $this->request->getPost('quality'),
                    'url' => $this->request->getPost('url'),
                    'trailer' => $this->request->getPost('trailer'),
                    'thumbnail' => $filename,
                    'description' => $this->request->getPost('description'),
                    'year' => $this->request->getPost('year'),
                    'casts' => $this->request->getPost('casts'),
                    'type' => $this->request->getPost('type'),
                    'author' => 'mkvids',
                    'date' => date("F j, Y")
                ];

                $model->insert($data);

                session()->setFlashdata('message', 'File uploaded successfully!');

                return redirect()->to(base_url('manage/movies'));

            } else {
                // Invalid file type
                session()->setFlashdata('message', 'Invalid file type!');
                return redirect()->back();
            }
        } else {
            // File upload failed
            session()->setFlashdata('message', 'File upload failed!');
            return redirect()->back();
        }
    }

    public function trending()
    {
        return view('admin/movies');
    }

    function usersTable() {
        $forge = \Config\Database::forge();
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'bio' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'date' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 30,
            ],
        ];

        $forge->addField($fields)
            ->addKey('id', true)
            ->createTable('users',true);

    }

    function moviesTable() {
        $forge = \Config\Database::forge();
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'url' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'trailer' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'thumbnail' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'casts' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'genre' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'quality' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
            ],
            'country' => [
                'type'       => 'VARCHAR',
                'constraint' => '120',
                'null' => true,
            ],
            'author' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'default'    => 'mkvids',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'date' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'year' => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
            'duration' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
        ];

        $forge->addField($fields)
            ->addKey('id', true)
            ->createTable('movies',true);

    }

    function seriesTable() {
        $forge = \Config\Database::forge();
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'url' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'trailer' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'thumbnail' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'casts' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null' => true,
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'quality' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'country' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null' => true,
            ],
            'genre' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],

            'author' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'default'    => 'mkvids',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'date' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'year' => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
            'duration' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
        ];

        $seasons = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'url' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null' => true,
            ],
            'thumbnail' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null' => true,
            ],
            'author' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'default'    => 'mkvids',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'date' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'series_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
        ];

        $episodes = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'url' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'thumbnail' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
                'null' => true,
            ],
            'author' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'duration' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'date' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'season_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'series_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
        ];

        $forge->addField($fields)
            ->addKey('id', true)
            ->createTable('series',true);

        $forge->addField($seasons)
            ->addKey('id', true)
            ->addForeignKey('series_id', 'series', 'id')
            ->createTable('season',true);

        $forge->addField($episodes)
            ->addKey('id', true)
            ->addForeignKey('season_id', 'season', 'id')
            ->addForeignKey('series_id', 'series', 'id')
            ->createTable('episode',true);
    }
}
