<?php

use PhpOffice\PhpWord\TemplateProcessor;

defined('BASEPATH') or exit('No direct script access allowed');

class template_word extends CI_Controller
{
    public function surat_pengantar($id)
    {
        require_once APPPATH . 'libraries/vendor/autoload.php';
        // $template = new \PhpOffice\PhpWord\TemplateProcessor(FCPATH.'resources/template/surat_template.docx');
        switch ($this->session->userdata('id')) {
            case '2':
                $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('resources/template/surat_template_manado.docx');
                break;
            case '3':
                $templateProcessor = new TemplateProcessor('resources/template/surat_template_tty.docx');
                break;
            case '4':
                $templateProcessor = new TemplateProcessor('resources/template/surat_template_pablu.docx');
                break;
            case '5':
                $templateProcessor = new TemplateProcessor('resources/template/surat_template_tdo.docx');
                break;
            case '6':
                $templateProcessor = new TemplateProcessor('resources/template/surat_template_lolak.docx');
                break;
            case '7':
                $templateProcessor = new TemplateProcessor('resources/template/surat_template_brk.docx');
                break;
            case '8':
                $templateProcessor = new TemplateProcessor('resources/template/surat_template_amg.docx');
                break;
            case '9':
                $templateProcessor = new TemplateProcessor('resources/template/surat_template_ktg.docx');
                break;
            case '10':
                $templateProcessor = new TemplateProcessor('resources/template/surat_template_thn.docx');
                break;
            case '11':
                $templateProcessor = new TemplateProcessor('resources/template/surat_template_btng.docx');
                break;
        }

        $data = $this->db->get_where('list_perkara', ['id_perkara' => $id])->result_array();
        foreach ($data as $lihat) :

            $templateProcessor->setValue('tgl_register', indonesian_date_tanggal($lihat['tgl_register']));
            $templateProcessor->setValue('no_surat', $lihat['no_surat_pengantar']);
            $templateProcessor->setValue('no_perkara', $lihat['no_perkara']);
            $templateProcessor->setValue('banyaknya', $lihat['banyaknya']);
            $templateProcessor->setValue('keterangan', $lihat['keterangan']);
            $templateProcessor->setValue('pejabat_berwenang', $lihat['pejabat_berwenang']);
            $templateProcessor->setValue('nm_pejabat', $lihat['nm_pejabat']);
            $templateProcessor->setValue('nip_pejabat', $lihat['nip_pejabat']);

        endforeach;

        // $pathToSave = 'dokumen/surat_pengantar/hello.docx';
        // $templateProcessor->saveAs($pathToSave);

        // foreach ($data as $lihat) :
        //     $template->setValue('no_surat', $lihat['no_surat_pengantar']);

        $temp_filename = "_" . date('dmY') . ".docx";
        // $template->save($temp_filename);
        $templateProcessor->saveAs('dokumen/surat_pengantar/' . $temp_filename);
        $path = 'dokumen/surat_pengantar/' . $temp_filename;
        // endforeach;
        header('Content-Description: File Transfer');
        header('Content-Type: application/vnd.ms-word');
        header('Content-Disposition: attachment; filename=' . $path);
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($path));
        flush();
        readfile($path);
        unlink($path);
        exit;
    }
}
