import docx
from docx.shared import Inches, Pt, RGBColor
from docx.enum.text import WD_ALIGN_PARAGRAPH
from docx.enum.table import WD_TABLE_ALIGNMENT, WD_ALIGN_VERTICAL
from docx.oxml import OxmlElement, parse_xml
from docx.oxml.ns import qn, nsdecls

def create_document():
    doc = docx.Document()
    
    # Page setup - Margins (A4)
    sections = doc.sections
    for section in sections:
        section.page_width = Inches(8.27)
        section.page_height = Inches(11.69)
        section.top_margin = Inches(1.0)
        section.bottom_margin = Inches(1.0)
        section.left_margin = Inches(1.0)
        section.right_margin = Inches(1.0)
        
    # Styles setup
    style_normal = doc.styles['Normal']
    font = style_normal.font
    font.name = 'Bookman Old Style'
    font.size = Pt(11)
    font.color.rgb = RGBColor(0, 0, 0)
    style_normal.paragraph_format.line_spacing = 1.15
    style_normal.paragraph_format.space_after = Pt(4)

    def set_cell_border(cell, **kwargs):
        """
        Set cell's border
        Usage:
        set_cell_border(
            cell,
            top={"sz": 12, "val": "single", "color": "000000"},
            bottom={"sz": 12, "val": "single", "color": "000000"},
            left={"sz": 12, "val": "single", "color": "000000"},
            right={"sz": 12, "val": "single", "color": "000000"},
        )
        """
        tcPr = cell._tc.get_or_add_tcPr()
        tcBorders = tcPr.first_child_found_in("w:tcBorders")
        if tcBorders is None:
            tcBorders = OxmlElement('w:tcBorders')
            tcPr.append(tcBorders)
        
        for edge in ('top', 'left', 'bottom', 'right', 'insideH', 'insideV'):
            edge_data = kwargs.get(edge)
            if edge_data:
                tag = 'w:{}'.format(edge)
                element = tcBorders.find(qn(tag))
                if element is None:
                    element = OxmlElement(tag)
                    tcBorders.append(element)
                for key, val in edge_data.items():
                    element.set(qn('w:{}'.format(key)), str(val))
            elif edge in kwargs and kwargs[edge] is None:
                # Remove border
                tag = 'w:{}'.format(edge)
                element = tcBorders.find(qn(tag))
                if element is not None:
                    tcBorders.remove(element)

    def add_centered_heading(text, bold=True, size=11, space_before=6, space_after=6):
        p = doc.add_paragraph()
        p.alignment = WD_ALIGN_PARAGRAPH.CENTER
        p.paragraph_format.space_before = Pt(space_before)
        p.paragraph_format.space_after = Pt(space_after)
        run = p.add_run(text)
        run.bold = bold
        run.font.size = Pt(size)
        return p

    def add_borderless_row(table, left_text, colon_text, right_text):
        row = table.add_row()
        # Remove borders
        for cell in row.cells:
            set_cell_border(cell, top={"val": "none"}, bottom={"val": "none"}, left={"val": "none"}, right={"val": "none"})
        
        cell_0 = row.cells[0]
        cell_1 = row.cells[1]
        cell_2 = row.cells[2]
        
        p0 = cell_0.paragraphs[0]
        p0.paragraph_format.space_after = Pt(4)
        run0 = p0.add_run(left_text)
        run0.bold = True
        
        p1 = cell_1.paragraphs[0]
        p1.paragraph_format.space_after = Pt(4)
        p1.add_run(colon_text)
        
        p2 = cell_2.paragraphs[0]
        p2.paragraph_format.space_after = Pt(4)
        p2.paragraph_format.alignment = WD_ALIGN_PARAGRAPH.JUSTIFY
        
        if isinstance(right_text, list):
            for idx, item in enumerate(right_text):
                if idx == 0:
                    p2.add_run(item)
                else:
                    p_sub = cell_2.add_paragraph()
                    p_sub.paragraph_format.space_after = Pt(4)
                    p_sub.paragraph_format.alignment = WD_ALIGN_PARAGRAPH.JUSTIFY
                    p_sub.add_run(item)
        else:
            p2.add_run(right_text)

    # --- JUDUL DOKUMEN ---
    add_centered_heading("BUPATI TULUNGAGUNG", bold=True, size=12, space_before=0, space_after=2)
    add_centered_heading("PROVINSI JAWA TIMUR", bold=True, size=12, space_before=0, space_after=12)
    
    add_centered_heading("PERATURAN BUPATI TULUNGAGUNG", bold=True, size=12, space_before=0, space_after=2)
    add_centered_heading("NOMOR 33 TAHUN 2022", bold=True, size=12, space_before=0, space_after=12)
    
    add_centered_heading("TENTANG", bold=True, size=11, space_before=0, space_after=12)
    
    add_centered_heading("KEDUDUKAN, SUSUNAN ORGANISASI, TUGAS DAN FUNGSI,", bold=True, size=11, space_before=0, space_after=2)
    add_centered_heading("SERTA TATA KERJA DINAS LINGKUNGAN HIDUP", bold=True, size=11, space_before=0, space_after=2)
    add_centered_heading("KABUPATEN TULUNGAGUNG", bold=True, size=11, space_before=0, space_after=18)
    
    add_centered_heading("DENGAN RAHMAT TUHAN YANG MAHA ESA", bold=True, size=11, space_before=0, space_after=12)
    
    add_centered_heading("BUPATI TULUNGAGUNG,", bold=True, size=11, space_before=0, space_after=18)

    # --- KONSIDERAN (TABLE BORDERLESS) ---
    table_kons = doc.add_table(rows=0, cols=3)
    table_kons.alignment = WD_TABLE_ALIGNMENT.CENTER
    table_kons.autofit = False
    
    col_widths = [Inches(1.5), Inches(0.3), Inches(4.47)]
    
    # Menimbang
    menimbang_list = [
        "a. bahwa dalam rangka implementasi Program Prioritas Nasional Penyederhanaan Birokrasi, dipandang perlu melakukan perubahan terhadap susunan organisasi, uraian tugas dan fungsi serta tata kerja Dinas Lingkungan Hidup Kabupaten Tulungagung;",
        "b. bahwa berdasarkan pertimbangan sebagaimana dimaksud pada huruf a dan untuk melaksanakan ketentuan Pasal 3 Peraturan Daerah Kabupaten Tulungagung Nomor 20 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Tulungagung sebagaimana telah diubah beberapa kali terakhir dengan Peraturan Daerah Kabupaten Tulungagung Nomor 7 Tahun 2021, maka perlu menetapkan Peraturan Bupati tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi serta Tata Kerja Dinas Lingkungan Hidup Kabupaten Tulungagung;"
    ]
    add_borderless_row(table_kons, "Menimbang", ":", menimbang_list)
    
    # Mengingat
    mengingat_list = [
        "1. Undang-Undang Nomor 5 Tahun 2014 tentang Aparatur Sipil Negara (Lembaran Negara Republik Indonesia Tahun 2014 Nomor 6, Tambahan Lembaran Negara Nomor 5494);",
        "2. Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintah Daerah (Lembaran Negara Republik Indonesia Tahun 2014 Nomor 244, Tambahan Lembaran Negara Republik Indonesia Nomor 5587) sebagaimana telah diubah beberapa kali, terakhir dengan Undang-Undang Nomor 9 Tahun 2015 (Lembaran Negara Republik Indonesia Tahun 2015 Nomor 58, Tambahan Lembaran Negara Republik Indonesia Nomor 5679);",
        "3. Peraturan Pemerintah Nomor 100 Tahun 2000 tentang Pengangkatan Pegawai Negeri Sipil Dalam Jabatan Struktural (Lembaran Negara Republik Indonesia Tahun 2000 Nomor 197, Tambahan Lembaran Negara Republik Indonesia Nomor 4018) sebagaimana telah diubah beberapa kali, terakhir dengan Peraturan Pemerintah Nomor 13 Tahun 2002 (Lembaran Negara Republik Indonesia Tahun 2002 Nomor 33, Tambahan Lembaran Negara Republik Indonesia Nomor 4194);",
        "4. Peraturan Pemerintah Nomor 9 Tahun 2003 tentang Wewenang Pengangkatan, Pemindahan, dan Pemberhentian Pegawai Negeri Sipil (Lembaran Negara Republik Indonesia Tahun 2003 Nomor 15, Tambahan Lembaran Negara Republik Indonesia Nomor 4263);",
        "5. Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah (Lembaran Negara Republik Indonesia Tahun 2016 Nomor 114) sebagaimana telah diubah dengan Peraturan Pemerintah Nomor 72 Tahun 2019 (Lembaran Negara Republik Indonesia Tahun 2019 Nomor 187, Tambahan Lembaran Negara Republik Indonesia Nomor 6402);",
        "6. Peraturan Pemerintah Nomor 11 Tahun 2017 tentang Manajemen Pegawai Negeri Sipil (Lembaran Negara Republik Indonesia Tahun 2017 Nomor 63, Tambahan Lembaran Negara Republik Indonesia Nomor 6037) sebagaimana telah diubah dengan Peraturan Pemerintah Nomor 17 Tahun 2020 (Lembaran Negara Republik Indonesia Tahun 2020 Nomor 68);",
        "7. Peraturan Presiden Nomor 16 Tahun 2015 tentang Kementerian Lingkungan Hidup dan Kehutanan (Lembaran Negara Republik Indonesia Tahun 2015 Nomor 17);",
        "8. Peraturan Menteri Lingkungan Hidup dan Kehutanan Nomor: P.18/MENLHK-II/2015 tentang Organisasi dan Tata Kerja Kementerian Lingkungan Hidup dan Kehutanan;",
        "9. Peraturan Menteri Lingkungan Hidup dan Kehutanan Nomor: P.74/Menlhk/Setjen/Kum.1/8/2016 tentang Pedoman Nomenklatur Perangkat Daerah Provinsi dan Kabupaten/Kota yang melaksanakan Urusan Pemerintahan Bidang Lingkungan Hidup dan Urusan Pemerintahan Bidang Kehutanan;",
        "10. Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 17 Tahun 2021 tentang Penyetaraan Jabatan Administrasi ke Dalam Jabatan Fungsional (Berita Negara Republik Indonesia Tahun 2021 Nomor 525);",
        "11. Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 25 Tahun 2021 tentang Penyederhanaan Struktur Organisasi Pada Instansi Pemerintah Untuk Penyederhanaan Birokrasi (Berita Negara Republik Indonesia Tahun 2021 Nomor 546);",
        "12. Peraturan Daerah Kabupaten Tulungagung Nomor 20 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Tulungagung (Lembaran Daerah Kabupaten Tulungagung Tahun 2016 Nomor 1 Seri D) sebagaimana telah diubah beberapa kali, terakhir dengan Peraturan Daerah Kabupaten Tulungagung Nomor 10 Tahun 2021 (Lembaran Daerah Kabupaten Tulungagung Tahun 2021 Nomor 2 Seri D);"
    ]
    add_borderless_row(table_kons, "Mengingat", ":", mengingat_list)
    
    # Fix widths for konsideran table
    for row in table_kons.rows:
        for idx, width in enumerate(col_widths):
            row.cells[idx].width = width

    # MEMUTUSKAN
    add_centered_heading("MEMUTUSKAN :", bold=True, size=11, space_before=12, space_after=12)

    # Menetapkan table
    table_menetapkan = doc.add_table(rows=0, cols=3)
    table_menetapkan.alignment = WD_TABLE_ALIGNMENT.CENTER
    table_menetapkan.autofit = False
    add_borderless_row(table_menetapkan, "Menetapkan", ":", "PERATURAN BUPATI TENTANG KEDUDUKAN, SUSUNAN ORGANISASI, TUGAS DAN FUNGSI SERTA TATA KERJA DINAS LINGKUNGAN HIDUP KABUPATEN TULUNGAGUNG.")
    for row in table_menetapkan.rows:
        for idx, width in enumerate(col_widths):
            row.cells[idx].width = width

    def add_p_justify(text, space_after=4, first_line_indent=0):
        p = doc.add_paragraph()
        p.paragraph_format.alignment = WD_ALIGN_PARAGRAPH.JUSTIFY
        p.paragraph_format.space_after = Pt(space_after)
        if first_line_indent > 0:
            p.paragraph_format.first_line_indent = Inches(first_line_indent)
        p.add_run(text)
        return p

    def add_list_item(num_str, text, space_after=4, left_indent=0.4):
        p = doc.add_paragraph()
        p.paragraph_format.alignment = WD_ALIGN_PARAGRAPH.JUSTIFY
        p.paragraph_format.space_after = Pt(space_after)
        p.paragraph_format.left_indent = Inches(left_indent)
        p.paragraph_format.first_line_indent = Inches(-left_indent)
        p.add_run(f"{num_str}\t{text}")
        return p

    # --- BAB I ---
    add_centered_heading("BAB I", bold=True, size=11, space_before=14, space_after=2)
    add_centered_heading("KETENTUAN UMUM", bold=True, size=11, space_before=0, space_after=10)
    add_centered_heading("Pasal 1", bold=True, size=11, space_before=0, space_after=8)
    
    add_p_justify("Dalam Peraturan Bupati ini yang dimaksud dengan :", space_after=6)
    
    pasal1_items = [
        ("1.", "Kabupaten adalah Kabupaten Tulungagung."),
        ("2.", "Pemerintah Kabupaten adalah Pemerintah Kabupaten Tulungagung."),
        ("3.", "Bupati adalah Bupati Tulungagung."),
        ("4.", "Wakil Bupati adalah Wakil Bupati Tulungagung."),
        ("5.", "Dewan Perwakilan Rakyat Daerah yang selanjutnya disingkat DPRD adalah Dewan Perwakilan Rakyat Daerah Kabupaten Tulungagung."),
        ("6.", "Sekretaris Daerah adalah Sekretaris Daerah Kabupaten Tulungagung."),
        ("7.", "Perangkat Daerah adalah unsur pembantu Bupati dan Dewan Perwakilan Rakyat Daerah dalam menyelenggarakan urusan pemerintahan yang menjadi kewenangan pemerintah Kabupaten."),
        ("8.", "Dinas adalah Dinas Lingkungan Hidup Kabupaten Tulungagung."),
        ("9.", "Unit Pelaksana Teknis Dinas yang selanjutnya disingkat UPTD adalah unsur pelaksana teknis pada Dinas."),
        ("10.", "Jabatan Fungsional adalah sekelompok jabatan yang berisi fungsi dan tugas berkaitan dengan pelayanan fungsional yang berdasarkan pada keahlian dan keterampilan tertentu."),
        ("11.", "Lingkungan hidup adalah kesatuan ruang dengan semua benda, daya, keadaan, dan makhluk hidup, termasuk manusia dan perilakunya, yang mempengaruhi alam itu sendiri, kelangsungan peri kehidupan dan kesejahteraan manusia serta makhluk hidup lain."),
        ("12.", "Sampah adalah sisa kegiatan sehari-hari manusia dan/atau proses alam yang berbentuk padat."),
        ("13.", "Pengelolaan sampah adalah kegiatan yang sistematis, menyeluruh, dan berkesinambungan yang meliputi pengurangan dan penanganan sampah."),
        ("14.", "Kajian lingkungan hidup strategis, yang selanjutnya disingkat KLHS, adalah rangkaian analisis yang sistematis, menyeluruh dan partisipatif untuk memastikan bahwa prinsip pembangunan berkelanjutan telah menjadi dasar dan terintegrasi dalam pembangunan suatu wilayah dan/atau kebijakan, rencana, dan/atau program."),
        ("15.", "Analisis mengenai dampak lingkungan hidup yang selanjutnya disebut AMDAL adalah kajian mengenai dampak penting suatu usaha dan/atau kegiatan yang direncanakan pada lingkungan hidup yang diperlukan bagi proses pengambilan keputusan tentang penyelenggaraan usaha dan/atau kegiatan."),
        ("16.", "Rencana Perlindungan dan Pengelolaan Lingkungan Hidup yang selanjutnya disingkat RPPLH adalah perencanaan tertulis yang memuat potensi, masalah lingkungan hidup, serta upaya perlindungan dan pengelolaannya dalam kurun waktu tertentu."),
        ("17.", "Upaya pengelolaan lingkungan hidup dan upaya pemantauan lingkungan hidup yang selanjutnya disebut UKL-UPL adalah pengelolaan dan pemantauan terhadap usaha dan/atau kegiatan yang tidak berdampak penting terhadap lingkungan hidup yang diperlukan bagi proses pengambilan keputusan tentang penyelenggaraan usaha dan/atau kegiatan."),
        ("18.", "Limbah adalah sisa suatu usaha dan/atau kegiatan."),
        ("19.", "Bahan berbahaya dan beracun yang selanjutnya disingkat B3 adalah zat, energi, dan/atau komponen lain yang karena sifat, konsentrasi, dan/atau jumlahnya, baik secara langsung maupun tidak langsung, dapat mencemarkan dan/atau merusak lingkungan hidup, dan/atau membahayakan lingkungan hidup, kesehatan, serta kelangsungan hidup manusia dan makhluk hidup lain."),
        ("20.", "Limbah bahan berbahaya dan beracun yang selanjutnya disebut Limbah B3, adalah sisa suatu usaha dan/atau kegiatan yang mengandung B3."),
        ("21.", "Pengelolaan limbah B3 adalah kegiatan yang meliputi pengurangan, penyimpanan, pengumpulan, pengangkutan, pemanfaatan, pengolahan, dan/atau penimbunan."),
        ("22.", "Gas Rumah Kaca yang selanjutnya disingkat GRK adalah gas yang terkandung dalam atmosfer baik alami maupun antropogenik, yang menyerap dan memancarkan kembali radiasi inframerah."),
        ("23.", "Ruang Terbuka Hijau adalah areal memanjang/jalur dan/atau mengelompok yang penggunaannya lebih bersifat terbuka, tempat tumbuh tanaman, baik yang tumbuh tanaman secara alamiah maupun yang sengaja ditanam."),
        ("24.", "Makam adalah lahan atau area yang merupakan tempat persinggahan terakhir manusia yang sudah meninggal."),
        ("25.", "Sub Koordinator adalah Pejabat Fungsional Jenjang Ahli yang diberikan tugas dan fungsi koordinasi serta pengelolaan kegiatan sesuai bidang tugasnya dalam suatu satuan kerja sebagaimana diatur peraturan perundang-undangan tentang organisasi dan tata kerja instansi.")
    ]
    for num, txt in pasal1_items:
        add_list_item(num, txt, space_after=4, left_indent=0.45)

    # --- BAB II ---
    add_centered_heading("BAB II", bold=True, size=11, space_before=14, space_after=2)
    add_centered_heading("KEDUDUKAN DAN SUSUNAN ORGANISASI", bold=True, size=11, space_before=0, space_after=8)
    
    add_centered_heading("Bagian Kesatu", bold=True, size=11, space_before=4, space_after=2)
    add_centered_heading("Kedudukan", bold=True, size=11, space_before=0, space_after=8)
    add_centered_heading("Pasal 2", bold=True, size=11, space_before=0, space_after=8)

    add_list_item("(1)", "Dinas merupakan unsur penunjang urusan pemerintahan daerah di Bidang Lingkungan Hidup.")
    add_list_item("(2)", "Dinas dipimpin oleh Kepala Dinas yang berkedudukan di bawah dan bertanggungjawab kepada Bupati melalui Sekretaris Daerah.")
    add_list_item("(3)", "Dinas sebagaimana dimaksud pada ayat (1) mempunyai tugas membantu Bupati dalam melaksanakan fungsi penunjang di Bidang Lingkungan Hidup.")
    add_list_item("(4)", "Dinas dalam melaksanakan tugas sebagaimana dimaksud pada ayat (3) menyelenggarakan fungsi :")
    
    pasal2_fungsi = [
        ("a.", "penyusunan kebijakan teknis bidang Lingkungan Hidup;"),
        ("b.", "pelaksanaan tugas dukungan teknis bidang Lingkungan Hidup;"),
        ("c.", "pemantauan, evaluasi dan pelaporan pelaksanaan tugas dukungan teknis bidang Lingkungan Hidup;"),
        ("d.", "pembinaan teknis penyelenggaraan fungsi-fungsi penunjang urusan pemerintahan daerah di bidang Lingkungan Hidup; dan"),
        ("e.", "pelaksanaan fungsi lain yang diberikan oleh Bupati sesuai tugas dan fungsinya.")
    ]
    for letter, txt in pasal2_fungsi:
        add_list_item(letter, txt, space_after=4, left_indent=0.7)

    add_centered_heading("Bagian Kedua", bold=True, size=11, space_before=10, space_after=2)
    add_centered_heading("Susunan Organisasi", bold=True, size=11, space_before=0, space_after=8)
    add_centered_heading("Pasal 3", bold=True, size=11, space_before=0, space_after=8)

    add_p_justify("Susunan Organisasi Dinas terdiri dari:", space_after=6)
    pasal3_items = [
        ("a.", "Kepala Dinas;"),
        ("b.", "Sekretariat, membawahi :\n\t1. Sub Bagian Keuangan;\n\t2. Sub Bagian Umum dan Kepegawaian;\n\t3. Kelompok Jabatan Fungsional."),
        ("c.", "Bidang Tata Lingkungan, membawahi kelompok Jabatan Fungsional;"),
        ("d.", "Bidang Pengelolaan Sampah dan Limbah B3, membawahi kelompok Jabatan Fungsional;"),
        ("e.", "Bidang Pengendalian Pencemaran dan Kerusakan Lingkungan Hidup, membawahi kelompok Jabatan Fungsional;"),
        ("f.", "Bidang Penaatan dan Peningkatan Kapasitas Lingkungan Hidup, membawahi kelompok Jabatan Fungsional;"),
        ("g.", "Unit Pelaksana Teknis Dinas;"),
        ("h.", "Kelompok Jabatan Fungsional.")
    ]
    for letter, txt in pasal3_items:
        add_list_item(letter, txt, space_after=4, left_indent=0.45)

    add_centered_heading("Pasal 4", bold=True, size=11, space_before=10, space_after=8)
    add_p_justify("Bagan Susunan Organisasi Dinas sebagaimana dimaksud dalam Pasal 3 tercantum dalam Lampiran dan merupakan bagian yang tidak terpisahkan dari Peraturan Bupati ini.")

    # --- BAB III ---
    add_centered_heading("BAB III", bold=True, size=11, space_before=14, space_after=2)
    add_centered_heading("TUGAS DAN FUNGSI", bold=True, size=11, space_before=0, space_after=8)
    
    add_centered_heading("Bagian Kesatu", bold=True, size=11, space_before=4, space_after=2)
    add_centered_heading("Kepala Dinas", bold=True, size=11, space_before=0, space_after=8)
    add_centered_heading("Pasal 5", bold=True, size=11, space_before=0, space_after=8)
    add_p_justify("Kepala Dinas sebagaimana dimaksud dalam Pasal 3 huruf a mempunyai tugas memimpin, membina, mengawasi, mengkoordinasikan, mengendalikan, merumuskan dan melaksanakan kebijakan teknis di Bidang Lingkungan Hidup.")

    add_centered_heading("Pasal 6", bold=True, size=11, space_before=10, space_after=8)
    add_p_justify("Dalam menyelenggarakan tugas sebagaimana dimaksud dalam Pasal 5 Kepala Dinas mempunyai fungsi:")
    pasal6_fungsi = [
        ("a.", "perumusan kebijakan bidang penataan lingkungan, pengelolaan sampah dan limbah B3, pengendalian pencemaran dan kerusakan lingkungan hidup, penaatan dan peningkatan kapasitas lingkungan;"),
        ("b.", "pelaksanaan kebijakan bidang penataan lingkungan, pengelolaan sampah dan limbah B3, pengendalian pencemaran dan kerusakan lingkungan hidup, penaatan dan peningkatan kapasitas lingkungan;"),
        ("c.", "koordinasi dan sinkronisasi pelaksanaan kebijakan bidang penataan lingkungan, pengelolaan sampah dan limbah B3, pengendalian pencemaran dan kerusakan lingkungan hidup, penaatan dan peningkatan kapasitas lingkungan;"),
        ("d.", "pelaksanaan bimbingan teknis dan supervisi atas pelaksanaan urusan penyelenggaraan bidang penataan lingkungan, pengelolaan sampah dan limbah B3, pengendalian pencemaran dan kerusakan lingkungan hidup, penaatan dan peningkatan kapasitas lingkungan;"),
        ("e.", "pemberian persetujuan lingkungan;"),
        ("f.", "pelaksanaan pengawasan, monitoring, evaluasi dan pelaporan bidang lingkungan hidup;"),
        ("g.", "pelaksanaan administrasi;"),
        ("h.", "pembinaan terhadap UPTD; dan"),
        ("i.", "pelaksanaan fungsi lain yang diberikan oleh Bupati terkait dengan tugas dan fungsinya.")
    ]
    for letter, txt in pasal6_fungsi:
        add_list_item(letter, txt, space_after=4, left_indent=0.45)

    # Bagian Kedua Secretariat
    add_centered_heading("Bagian Kedua", bold=True, size=11, space_before=10, space_after=2)
    add_centered_heading("Sekretariat", bold=True, size=11, space_before=0, space_after=8)
    add_centered_heading("Pasal 7", bold=True, size=11, space_before=0, space_after=8)

    add_list_item("(1)", "Sekretariat sebagaimana dimaksud dalam Pasal 3 huruf b mempunyai tugas membantu Kepala Dinas dalam merumuskan dan melaksanakan kebijakan, menyelenggarakan perencanaan, mengkoordinasikan bidang-bidang, membina, melaksanakan dan mengendalikan administrasi umum, keuangan, sarana prasarana, kepegawaian, kerumahtanggaan dan kelembagaan.")
    add_list_item("(2)", "Sekretariat dipimpin oleh seorang Sekretaris yang berada dibawah dan bertanggung jawab kepada Kepala Dinas.")

    add_centered_heading("Pasal 8", bold=True, size=11, space_before=10, space_after=8)
    add_p_justify("Untuk melaksanakan tugas sebagaimana dimaksud dalam Pasal 7 ayat (1) Sekretariat mempunyai fungsi :")
    pasal8_fungsi = [
        ("a.", "pengelola dan pembina urusan tata usaha dan tata kearsipan, rumah tangga dan keprotokolan Dinas;"),
        ("b.", "pengoordinasian penyusunan program dan perencanaan Dinas;"),
        ("c.", "pengoordinasian penyusunan rancangan peraturan perundang-undangan bidang Lingkungan Hidup;"),
        ("d.", "pelaksanaan pembinaan organisasi dan tata laksana Dinas;"),
        ("e.", "pengelolaan administrasi dan penyusun laporan kepegawaian, keuangan dan perlengkapan;"),
        ("f.", "pengoordinasian pelaksanaan tugas bidang-bidang;"),
        ("g.", "pelaksanaan koordinasi dalam rangka penyusunan program dan penyelenggaraan tugas-tugas Dinas;"),
        ("h.", "menyusun laporan pertanggung jawaban atas pelaksanaan tugasnya; dan"),
        ("i.", "pelaksanaan fungsi lain yang diberikan oleh Kepala Dinas terkait dengan tugas dan fungsinya.")
    ]
    for letter, txt in pasal8_fungsi:
        add_list_item(letter, txt, space_after=4, left_indent=0.45)

    add_centered_heading("Pasal 9", bold=True, size=11, space_before=10, space_after=8)
    add_list_item("(1)", "Sub Bagian Keuangan sebagaimana dimaksud dalam Pasal 3 huruf b angka 1 mempunyai tugas:")
    pasal9_1 = [
        ("a.", "melakukan penatausahaan keuangan dan barang milik daerah;"),
        ("b.", "menyusun Analisa kebutuhan pengadaan dan melakukan administrasi barang;"),
        ("c.", "menyusun laporan pertanggungjawaban atas pelaksanaan tugas; dan"),
        ("d.", "melaksanakan tugas-tugas lain yang diberikan oleh Sekretaris.")
    ]
    for letter, txt in pasal9_1:
        add_list_item(letter, txt, space_after=4, left_indent=0.7)

    add_list_item("(2)", "Sub Bagian Umum dan Kepegawaian sebagaimana dimaksud dalam Pasal 3 huruf b angka 2 mempunyai tugas :")
    pasal9_2 = [
        ("a.", "melakukan urusan administrasi persuratan, kearsipan, perjalanan dinas, keprotokolan dan rumah tangga;"),
        ("b.", "melaksanakan penatausahaan administrasi kepegawaian;"),
        ("c.", "melaksanakan tugas di bidang hubungan masyarakat;"),
        ("d.", "menyusun bahan pembinaan organisasi dan ketatalaksanaan dinas;"),
        ("e.", "menyusun laporan pertanggungjawaban atas pelaksanaan tugasnya; dan"),
        ("f.", "melaksanakan tugas-tugas lain yang diberikan oleh Sekretaris.")
    ]
    for letter, txt in pasal9_2:
        add_list_item(letter, txt, space_after=4, left_indent=0.7)

    add_list_item("(3)", "Masing-masing Sub Bagian sebagaimana dimaksud pada ayat (1) dan ayat (2) dipimpin oleh seorang Kepala Sub Bagian yang berada dibawah dan bertanggung jawab kepada Sekretaris.")

    # Bagian Ketiga Bidang Tata Lingkungan
    add_centered_heading("Bagian Ketiga", bold=True, size=11, space_before=10, space_after=2)
    add_centered_heading("Bidang Tata Lingkungan", bold=True, size=11, space_before=0, space_after=8)
    add_centered_heading("Pasal 10", bold=True, size=11, space_before=0, space_after=8)

    add_list_item("(1)", "Bidang Tata Lingkungan sebagaimana dimaksud dalam Pasal 3 huruf c mempunyai tugas menyusun perumusan kebijakan dan koordinasi pelaksanaan kebijakan teknis di bidang inventarisasi RPPLH, KLHS, dan kajian dampak lingkungan, pengelolaan keanekaragaman hayati, serta pengelolaan ruang terbuka hijau dan pemakaman.")
    add_list_item("(2)", "Untuk melaksanakan tugas sebagaimana dimaksud pada ayat (1) Bidang Tata Lingkungan mempunyai fungsi:")
    pasal10_2 = [
        ("a.", "pengoordinasian perumusan kebijakan teknis inventarisasi RPPLH, KLHS, dan kajian dampak lingkungan, pengelolaan keanekaragaman hayati, serta pengelolaan ruang terbuka hijau dan pemakaman;"),
        ("b.", "pengoordinasian pelaksanaan kebijakan teknis inventarisasi RPPLH, KLHS, dan kajian dampak lingkungan, pengelolaan keanekaragaman hayati, serta pengelolaan ruang terbuka hijau dan pemakaman;"),
        ("c.", "perumusan kebijakan dan penyusunan Rencana Perlindungan dan Pengelolaan Lingkungan Hidup berbasis daya dukung dan daya tampung lingkungan hidup;"),
        ("d.", "pembinaan tata laksana Analisis Mengenai Dampak Lingkungan dan penilaian dokumen lingkungan serta pemberian rekomendasi persetujuan lingkungan;"),
        ("e.", "pelaksanaan bimbingan teknis bidang tata lingkungan;"),
        ("f.", "pelaksanaan monitoring, evaluasi dan pelaporan pelaksanaan tugas; dan"),
        ("g.", "pelaksanaan fungsi lain yang diberikan oleh Kepala Dinas.")
    ]
    for letter, txt in pasal10_2:
        add_list_item(letter, txt, space_after=4, left_indent=0.7)
    add_list_item("(3)", "Bidang Tata Lingkungan dipimpin oleh seorang Kepala Bidang yang berada dibawah dan bertanggung jawab kepada Kepala Dinas.")

    # Bagian Keempat Bidang Pengelolaan Sampah dan Limbah B3
    add_centered_heading("Bagian Keempat", bold=True, size=11, space_before=10, space_after=2)
    add_centered_heading("Bidang Pengelolaan Sampah dan Limbah B3", bold=True, size=11, space_before=0, space_after=8)
    add_centered_heading("Pasal 11", bold=True, size=11, space_before=0, space_after=8)

    add_list_item("(1)", "Bidang Pengelolaan Sampah dan Limbah B3 sebagaimana dimaksud dalam Pasal 3 huruf d mempunyai tugas menyusun perumusan kebijakan dan koordinasi pelaksanaan kebijakan teknis di bidang pengurangan sampah, penanganan sampah, dan limbah B3.")
    add_list_item("(2)", "Untuk melaksanakan tugas sebagaimana dimaksud pada ayat (1), Bidang Pengelolaan Sampah dan Limbah B3 mempunyai fungsi:")
    pasal11_2 = [
        ("a.", "pengoordinasian perumusan kebijakan teknis bidang pengelolaan sampah dan limbah B3;"),
        ("b.", "pengoordinasian pelaksanaan kebijakan teknis penanganan sampah, pengurangan sampah, dan limbah B3;"),
        ("c.", "pengoordinasian penyusunan informasi pengelolaan sampah;"),
        ("d.", "pelaksanaan penelitian, pengembangan dan inovasi bidang pengelolaan sampah dan limbah B3;"),
        ("e.", "pelaksanaan bimbingan teknis dan supervisi bidang pengelolaan sampah dan limbah B3;"),
        ("f.", "pengoordinasian dan sinkronisasi kebijakan teknis penyelenggaraan pengelolaan sampah dan limbah B3;"),
        ("g.", "penyediaan sarana prasarana penanganan sampah;"),
        ("h.", "pelaksanaan kerjasama dan pengembangan investasi kemitraan dengan badan usaha dalam menyelenggarakan pengelolaan sampah;"),
        ("i.", "penyusunan kebijakan dan pelaksanaan perijinan pengelolaan sampah yang diselenggarakan oleh swasta;"),
        ("j.", "pelaksanaan pemberian persetujuan teknis penyimpanan sementara, pengumpulan, pemanfaatan, penimbunan, penguburan dan pengangkutan limbah B3 dan limbah B3 medis;"),
        ("k.", "pelaksanakan monitoring, evaluasi dan pelaporan pelaksanaan tugas; dan"),
        ("l.", "pelaksanaan fungsi lain yang diberikan oleh Kepala Dinas terkait dengan tugas dan fungsinya.")
    ]
    for letter, txt in pasal11_2:
        add_list_item(letter, txt, space_after=4, left_indent=0.7)
    add_list_item("(3)", "Bidang Pengelolaan Sampah dan Limbah B3 dipimpin oleh seorang Kepala Bidang yang berada dibawah dan bertanggung jawab kepada Kepala Dinas.")

    # Bagian Kelima Bidang Pengendalian Pencemaran dan Kerusakan Lingkungan Hidup
    add_centered_heading("Bagian Kelima", bold=True, size=11, space_before=10, space_after=2)
    add_centered_heading("Bidang Pengendalian Pencemaran dan Kerusakan Lingkungan Hidup", bold=True, size=11, space_before=0, space_after=8)
    add_centered_heading("Pasal 12", bold=True, size=11, space_before=0, space_after=8)

    add_list_item("(1)", "Bidang Pengendalian Pencemaran dan Kerusakan Lingkungan Hidup sebagaimana dimaksud dalam Pasal 3 huruf e mempunyai tugas menyusun perumusan kebijakan dan koordinasi pelaksanaan kebijakan teknis di bidang pencegahan, penanggulangan, dan pemulihan pencemaran dan kerusakan lingkungan hidup.")
    add_list_item("(2)", "Untuk melaksanakan tugas sebagaimana dimaksud pada ayat (1) Bidang Pengendalian Pencemaran dan Kerusakan Lingkungan Hidup mempunyai fungsi:")
    pasal12_2 = [
        ("a.", "pengoordinasian perumusan kebijakan teknis di bidang penyelenggaraan pencegahan, penanggulangan dan pemulihan pencemaran dan/atau kerusakan terhadap media tanah, air dan udara;"),
        ("b.", "koordinasi dan sinkronisasi pelaksanaan kebijakan teknis di bidang penyelenggaraan pencegahan, penanggulangan dan pemulihan pencemaran dan/atau kerusakan terhadap media tanah, air dan udara;"),
        ("c.", "pelaksanaan kebijakan teknis di bidang penyelenggaraan pencegahan, penanggulangan dan pemulihan pencemaran dan/atau kerusakan media tanah, air dan udara;"),
        ("d.", "penyiapan sarana prasarana dan pelaksanaan pemantauan kualitas lingkungan hidup;"),
        ("e.", "pelaksanaan persetujuan teknis pemenuhan baku mutu air limbah dan emisi;"),
        ("f.", "penyiapan dan pengembangan sistem informasi peringatan dini terhadap potensi dampak pencemaran dan/atau kerusakan lingkungan hidup kepada masyarakat;"),
        ("g.", "pelaksanaan pembinaan tindak lanjut rekomendasi evaluasi sumber pencemar institusi dan non institusi;"),
        ("h.", "pelaksanaan monitoring, evaluasi dan pelaporan pelaksanaan tugas; dan"),
        ("i.", "pelaksanaan fungsi lain yang diberikan oleh Kepala Dinas terkait dengan tugas dan fungsinya.")
    ]
    for letter, txt in pasal12_2:
        add_list_item(letter, txt, space_after=4, left_indent=0.7)
    add_list_item("(3)", "Bidang Pengendalian Pencemaran dan Kerusakan Lingkungan Hidup dipimpin oleh seorang Kepala Bidang yang berada di bawah dan bertanggung jawab kepada Kepala Dinas.")

    # Bagian Keenam Bidang Penaatan dan Peningkatan Kapasitas Lingkungan Hidup
    add_centered_heading("Bagian Keenam", bold=True, size=11, space_before=10, space_after=2)
    add_centered_heading("Bidang Penaatan dan Peningkatan Kapasitas Lingkungan Hidup", bold=True, size=11, space_before=0, space_after=8)
    add_centered_heading("Pasal 13", bold=True, size=11, space_before=0, space_after=8)

    add_list_item("(1)", "Bidang Penaatan dan Peningkatan Kapasitas Lingkungan Hidup sebagaimana dimaksud dalam Pasal 3 huruf f mempunyai tugas menyusun perumusan kebijakan dan koordinasi pelaksanaan kebijakan teknis di bidang pengawasan lingkungan hidup, pengaduan dan penaatan hukum lingkungan dan peningkatan kapasitas lingkungan hidup.")
    add_list_item("(2)", "Untuk melaksanakan tugas sebagaimana dimaksud pada ayat (1) Bidang Penaatan dan Peningkatan Kapasitas Lingkungan Hidup mempunyai fungsi:")
    pasal13_2 = [
        ("a.", "pengoordinasian perumusan kebijakan teknis di bidang pengawasan lingkungan hidup, pengaduan dan penaatan hukum lingkungan dan peningkatan kapasitas lingkungan hidup;"),
        ("b.", "pengoordinasian pelaksanaan kebijakan teknis di bidang pengawasan lingkungan hidup, pengaduan dan penaatan hukum lingkungan dan peningkatan kapasitas lingkungan hidup;"),
        ("c.", "koordinasi dan sinkronisasi pelaksanaan kebijakan teknis di bidang pengawasan lingkungan hidup, pengaduan dan penaatan hukum lingkungan dan peningkatan kapasitas lingkungan hidup;"),
        ("d.", "pelaksanaan bimbingan teknis dan supervisi terkait penyelenggaraan pencegahan, pengawasan, pengamanan, penanganan pengaduan, penegakan hukum dan peningkatan kapasitas lingkungan hidup;"),
        ("e.", "pengembangan sistem informasi penerimaan pengaduan masyarakat;"),
        ("f.", "pelaksanaan penetapan pengakuan dan peningkatan kapasitas kearifan lokal, atau pengetahuan tradisional dan hak kearifan lokal terkait dengan Perlindungan dan Pengelolaan Lingkungan Hidup (PPLH);"),
        ("g.", "pengoordinasian pengembangan kelembagaan kelompok masyarakat peduli lingkungan hidup dan penghargaan lingkungan hidup;"),
        ("h.", "pembinaan peningkatan kapasitas lingkungan hidup;"),
        ("i.", "pelaksanaan monitoring, evaluasi, dan pelaporan pelaksanaan tugas; dan"),
        ("j.", "pelaksanaan fungsi lain yang diberikan oleh Kepala Dinas terkait dengan tugas dan fungsinya.")
    ]
    for letter, txt in pasal13_2:
        add_list_item(letter, txt, space_after=4, left_indent=0.7)
    add_list_item("(3)", "Bidang Penaatan dan Peningkatan Kapasitas Lingkungan Hidup dipimpin oleh seorang Kepala Bidang yang berada dibawah dan bertanggung jawab kepada Kepala Dinas.")

    # --- BAB IV ---
    add_centered_heading("BAB IV", bold=True, size=11, space_before=14, space_after=2)
    add_centered_heading("KELOMPOK JABATAN FUNGSIONAL", bold=True, size=11, space_before=0, space_after=8)
    add_centered_heading("Pasal 14", bold=True, size=11, space_before=0, space_after=8)
    add_p_justify("Kelompok Jabatan Fungsional sebagaimana dimaksud dalam Pasal 3 huruf h, mempunyai tugas melakukan kegiatan sesuai dengan bidang tenaga fungsional masing-masing berdasarkan ketentuan peraturan perundang-undangan.")

    add_centered_heading("Pasal 15", bold=True, size=11, space_before=10, space_after=8)
    add_list_item("(1)", "Kelompok Jabatan Fungsional sebagaimana dimaksud dalam pasal 3 huruf b angka 3, huruf c, huruf d, huruf e, dan huruf f terdiri atas sejumlah tenaga fungsional yang terbagi dalam kelompok jabatan fungsional sesuai dengan bidang keahliannya.")
    add_list_item("(2)", "Kelompok Jabatan Fungsional sebagaimana dimaksud pada ayat (1) dikoordinir oleh Sub Koordinator pelaksana fungsi pelayanan fungsional sesuai dengan ruang lingkup bidang tugas dan fungsi jabatan pimpinan tinggi pratama.")
    add_list_item("(3)", "Sub Koordinator sebagaimana dimaksud pada ayat (2) melaksanakan tugas membantu Pejabat Administrator dalam penyusunan rencana, pelaksanaan dan pengendalian, pemantauan dan evaluasi, serta pelaporan pada satu kelompok substansi pada masing-masing pengelompokan uraian fungsi.")
    add_list_item("(4)", "Sub Koordinator sebagaimana dimaksud pada ayat (2) dan ayat (3) ditetapkan oleh Bupati.")
    add_list_item("(5)", "Ketentuan mengenai pembagian tugas Sub Koordinator sebagaimana dimaksud pada ayat (2) dan ayat (3) ditetapkan oleh Bupati.")

    # --- BAB V ---
    add_centered_heading("BAB V", bold=True, size=11, space_before=14, space_after=2)
    add_centered_heading("TATA KERJA", bold=True, size=11, space_before=0, space_after=8)
    add_centered_heading("Pasal 16", bold=True, size=11, space_before=0, space_after=8)

    add_list_item("(1)", "Dalam melaksanakan tugas dan fungsinya setiap pimpinan unit organisasi dan kelompok tenaga fungsional dalam lingkup Dinas Lingkungan Hidup wajib menerapkan prinsip-prinsip koordinasi, integrasi, sinkronisasi, dan simplifikasi secara vertikal dan horizontal baik dalam lingkungan masing-masing organisasi maupun antar satuan organisasi di lingkungan pemerintah daerah serta dengan instansi lain di luar pemerintah daerah sesuai dengan tugas masing-masing.")
    add_list_item("(2)", "Setiap pimpinan satuan organisasi bertanggungjawab memimpin, mengorganisasikan, dan memberikan bimbingan serta petunjuk bagi pelaksanaan tugas bawahannya masing-masing.")
    add_list_item("(3)", "Setiap pimpinan satuan organisasi wajib mengawasi bawahannya masing-masing dan bila terjadi penyimpangan agar mengambil langkah-langkah yang diperlukan sesuai dengan ketentuan peraturan perundang-undangan.")
    add_list_item("(4)", "Setiap pimpinan satuan organisasi wajib mengikuti dan mematuhi petunjuk dan bertanggungjawab kepada atasan masing-masing dan menyiapkan laporan berkala tepat pada waktunya.")
    add_list_item("(5)", "Setiap laporan yang diterima oleh pimpinan satuan organisasi dari bawahan, wajib diolah dan dipergunakan sebagai bahan untuk penyusunan laporan lebih lanjut dan untuk memberikan petunjuk pada bawahan.")
    add_list_item("(6)", "Dalam menyampaikan laporan masing-masing kepada atasan, tembusan laporan wajib disampaikan kepada satuan organisasi lain yang secara fungsional mempunyai hubungan kerja.")
    add_list_item("(7)", "Dalam melaksanakan tugas setiap pimpinan satuan organisasi dibawahnya dan dalam rangka pemberian bimbingan kepada bawahan masing-masing wajib mengadakan rapat berkala.")

    # --- BAB VI ---
    add_centered_heading("BAB VI", bold=True, size=11, space_before=14, space_after=2)
    add_centered_heading("PENGANGKATAN DAN PEMBERHENTIAN DALAM JABATAN", bold=True, size=11, space_before=0, space_after=8)
    add_centered_heading("Pasal 17", bold=True, size=11, space_before=0, space_after=8)
    add_p_justify("Pengangkatan dan pemberhentian dalam jabatan sebagaimana dimaksud dalam Pasal 3 sesuai dengan peraturan perundang-undangan yang berlaku.")

    # --- BAB VII ---
    add_centered_heading("BAB VII", bold=True, size=11, space_before=14, space_after=2)
    add_centered_heading("KETENTUAN PENUTUP", bold=True, size=11, space_before=0, space_after=8)
    add_centered_heading("Pasal 18", bold=True, size=11, space_before=0, space_after=8)
    add_p_justify("Pada saat Peraturan Bupati ini mulai berlaku, maka Peraturan Bupati Tulungagung Nomor 71 Tahun 2019 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi serta Tata Kerja Dinas Lingkungan Hidup Kabupaten Tulungagung, dicabut dan dinyatakan tidak berlaku.")

    add_centered_heading("Pasal 19", bold=True, size=11, space_before=10, space_after=8)
    add_p_justify("Peraturan Bupati ini mulai berlaku pada tanggal diundangkan.")
    add_p_justify("Agar setiap orang mengetahuinya, memerintahkan pengundangan Peraturan Bupati ini dengan penempatan dalam Berita Daerah Kabupaten Tulungagung.")

    # --- SIGNATURE BLOCK (TABLE BORDERLESS) ---
    doc.add_paragraph().paragraph_format.space_after = Pt(12)
    
    table_sig = doc.add_table(rows=2, cols=2)
    table_sig.alignment = WD_TABLE_ALIGNMENT.CENTER
    table_sig.autofit = False
    
    sig_col_widths = [Inches(3.3), Inches(2.97)]
    
    # Left cell: Diundangkan
    cell_diundangkan = table_sig.cell(0, 0)
    p_di = cell_diundangkan.paragraphs[0]
    p_di.paragraph_format.space_after = Pt(2)
    p_di.add_run("Diundangkan di Tulungagung\n")
    p_di.add_run("pada tanggal 25 Januari 2022\n")
    run_sek = p_di.add_run("SEKRETARIS DAERAH,")
    run_sek.bold = True
    
    p_di_space = cell_diundangkan.add_paragraph()
    p_di_space.paragraph_format.space_after = Pt(36) # Space for signature
    
    p_di_nama = cell_diundangkan.add_paragraph()
    p_di_nama.paragraph_format.space_after = Pt(2)
    run_sukaji = p_di_nama.add_run("Drs. SUKAJI, M.Si")
    run_sukaji.bold = True
    run_sukaji.underline = True
    
    p_di_nip = cell_diundangkan.add_paragraph()
    p_di_nip.paragraph_format.space_after = Pt(2)
    p_di_nip.add_run("Pembina Utama Madya\n")
    p_di_nip.add_run("NIP. 19640119 198508 1 003")

    # Right cell: Ditetapkan
    cell_ditetapkan = table_sig.cell(0, 1)
    p_dit = cell_ditetapkan.paragraphs[0]
    p_dit.paragraph_format.space_after = Pt(2)
    p_dit.add_run("Ditetapkan di Tulungagung\n")
    p_dit.add_run("pada tanggal 25 Januari 2022\n")
    run_bup = p_dit.add_run("BUPATI TULUNGAGUNG,")
    run_bup.bold = True
    
    p_dit_space = cell_ditetapkan.add_paragraph()
    p_dit_space.paragraph_format.space_after = Pt(48) # Space for signature
    
    p_dit_nama = cell_ditetapkan.add_paragraph()
    p_dit_nama.paragraph_format.space_after = Pt(2)
    run_maryoto = p_dit_nama.add_run("MARYOTO BIROWO")
    run_maryoto.bold = True

    # Row 2: Berita Daerah
    cell_bd = table_sig.cell(1, 0)
    p_bd = cell_bd.paragraphs[0]
    p_bd.paragraph_format.space_before = Pt(12)
    p_bd.paragraph_format.space_after = Pt(2)
    p_bd.add_run("Berita Daerah Kabupaten Tulungagung\n")
    p_bd.add_run("Tahun 2022 Nomor 33")

    # Remove borders from signature table
    for row in table_sig.rows:
        for idx, width in enumerate(sig_col_widths):
            cell = row.cells[idx]
            cell.width = width
            set_cell_border(cell, top={"val": "none"}, bottom={"val": "none"}, left={"val": "none"}, right={"val": "none"})

    # --- PAGE BREAK FOR LAMPIRAN ---
    doc.add_page_break()

    # --- LAMPIRAN HEADER ---
    table_lamp_head = doc.add_table(rows=1, cols=2)
    table_lamp_head.alignment = WD_TABLE_ALIGNMENT.RIGHT
    table_lamp_head.autofit = False
    
    c_left = table_lamp_head.cell(0, 0)
    c_right = table_lamp_head.cell(0, 1)
    
    set_cell_border(c_left, top={"val": "none"}, bottom={"val": "none"}, left={"val": "none"}, right={"val": "none"})
    set_cell_border(c_right, top={"val": "none"}, bottom={"val": "none"}, left={"val": "none"}, right={"val": "none"})
    
    c_left.width = Inches(2.5)
    c_right.width = Inches(3.77)
    
    p_lh = c_right.paragraphs[0]
    p_lh.paragraph_format.space_after = Pt(2)
    p_lh.add_run("LAMPIRAN : PERATURAN BUPATI TULUNGAGUNG\n").bold = True
    p_lh.add_run("NOMOR     : 33 TAHUN 2022\n").bold = True
    p_lh.add_run("TANGGAL : 25 JANUARI 2022\n").bold = True

    add_centered_heading("SUSUNAN ORGANISASI", bold=True, size=12, space_before=18, space_after=2)
    add_centered_heading("DINAS LINGKUNGAN HIDUP", bold=True, size=12, space_before=0, space_after=2)
    add_centered_heading("KABUPATEN TULUNGAGUNG", bold=True, size=12, space_before=0, space_after=18)

    # --- BAGAN ORGANISASI (TABLE STRUCTURED CHART) ---
    def style_box(cell, bg_color="FFFFFF"):
        set_cell_border(cell, 
                        top={"sz": 8, "val": "single", "color": "000000"},
                        bottom={"sz": 8, "val": "single", "color": "000000"},
                        left={"sz": 8, "val": "single", "color": "000000"},
                        right={"sz": 8, "val": "single", "color": "000000"})
        if bg_color != "FFFFFF":
            shading_elm = parse_xml(f'<w:shd {nsdecls("w")} w:fill="{bg_color}"/>')
            cell._tc.get_or_add_tcPr().append(shading_elm)

    table_chart = doc.add_table(rows=7, cols=4)
    table_chart.alignment = WD_TABLE_ALIGNMENT.CENTER
    table_chart.autofit = False
    
    chart_col_w = Inches(1.56)
    for row in table_chart.rows:
        for cell in row.cells:
            cell.width = chart_col_w
            set_cell_border(cell, top={"val": "none"}, bottom={"val": "none"}, left={"val": "none"}, right={"val": "none"})
            cell.vertical_alignment = WD_ALIGN_VERTICAL.CENTER

    # Row 0: KEPALA DINAS (Merge cols 1-2)
    cell_kd = table_chart.cell(0, 1)
    cell_kd.merge(table_chart.cell(0, 2))
    style_box(cell_kd, bg_color="F0F4F8")
    p_kd = cell_kd.paragraphs[0]
    p_kd.alignment = WD_ALIGN_PARAGRAPH.CENTER
    p_kd.paragraph_format.space_before = Pt(4)
    p_kd.paragraph_format.space_after = Pt(4)
    r_kd = p_kd.add_run("KEPALA DINAS")
    r_kd.bold = True
    r_kd.font.size = Pt(10)

    # Row 1: Sub-level 1: KELOMPOK JABATAN FUNGSIONAL (col 0-1) & SEKRETARIAT (col 2-3)
    c_jf1 = table_chart.cell(1, 0)
    c_jf1.merge(table_chart.cell(1, 1))
    style_box(c_jf1)
    p_jf1 = c_jf1.paragraphs[0]
    p_jf1.alignment = WD_ALIGN_PARAGRAPH.CENTER
    p_jf1.paragraph_format.space_before = Pt(4)
    p_jf1.paragraph_format.space_after = Pt(4)
    p_jf1.add_run("KELOMPOK JABATAN FUNGSIONAL").bold = True

    c_sek = table_chart.cell(1, 2)
    c_sek.merge(table_chart.cell(1, 3))
    style_box(c_sek, bg_color="F0F4F8")
    p_sek = c_sek.paragraphs[0]
    p_sek.alignment = WD_ALIGN_PARAGRAPH.CENTER
    p_sek.paragraph_format.space_before = Pt(4)
    p_sek.paragraph_format.space_after = Pt(4)
    p_sek.add_run("SEKRETARIAT").bold = True

    # Row 2: Sub-units under Sekretariat
    c_sek_sub = table_chart.cell(2, 2)
    c_sek_sub.merge(table_chart.cell(2, 3))
    style_box(c_sek_sub)
    p_sek_sub = c_sek_sub.paragraphs[0]
    p_sek_sub.alignment = WD_ALIGN_PARAGRAPH.CENTER
    p_sek_sub.paragraph_format.space_before = Pt(4)
    p_sek_sub.paragraph_format.space_after = Pt(4)
    p_sek_sub.add_run("KELOMPOK JF  |  SUB BAGIAN KEUANGAN  |  SUB BAGIAN UMUM DAN KEPEGAWAIAN").font.size = Pt(9)

    # Row 3: 4 BIDANG (Columns 0, 1, 2, 3)
    bidang_names = [
        "BIDANG TATA LINGKUNGAN",
        "BIDANG PENGELOLAAN SAMPAH DAN LIMBAH B3",
        "BIDANG PENGENDALIAN PENCEMARAN DAN KERUSAKAN LINGKUNGAN HIDUP",
        "BIDANG PENAATAN DAN PENINGKATAN KAPASITAS LINGKUNGAN HIDUP"
    ]
    for idx, bname in enumerate(bidang_names):
        cell_b = table_chart.cell(3, idx)
        style_box(cell_b, bg_color="F0F4F8")
        pb = cell_b.paragraphs[0]
        pb.alignment = WD_ALIGN_PARAGRAPH.CENTER
        pb.paragraph_format.space_before = Pt(4)
        pb.paragraph_format.space_after = Pt(4)
        rb = pb.add_run(bname)
        rb.bold = True
        rb.font.size = Pt(8.5)

    # Row 4: KELOMPOK JF under each Bidang
    for idx in range(4):
        cell_jf = table_chart.cell(4, idx)
        style_box(cell_jf)
        pjf = cell_jf.paragraphs[0]
        pjf.alignment = WD_ALIGN_PARAGRAPH.CENTER
        pjf.paragraph_format.space_before = Pt(4)
        pjf.paragraph_format.space_after = Pt(4)
        rjf = pjf.add_run("KELOMPOK JF")
        rjf.bold = True
        rjf.font.size = Pt(8.5)

    # Row 6: UPT DINAS (Middle cell merged)
    cell_upt = table_chart.cell(6, 1)
    cell_upt.merge(table_chart.cell(6, 2))
    style_box(cell_upt, bg_color="F0F4F8")
    pupt = cell_upt.paragraphs[0]
    pupt.alignment = WD_ALIGN_PARAGRAPH.CENTER
    pupt.paragraph_format.space_before = Pt(4)
    pupt.paragraph_format.space_after = Pt(4)
    rupt = pupt.add_run("UPT DINAS")
    rupt.bold = True
    rupt.font.size = Pt(9.5)

    # Signature at bottom of Lampiran
    doc.add_paragraph().paragraph_format.space_after = Pt(18)
    
    table_lamp_sig = doc.add_table(rows=1, cols=2)
    table_lamp_sig.alignment = WD_TABLE_ALIGNMENT.CENTER
    table_lamp_sig.autofit = False
    
    c_ls_left = table_lamp_sig.cell(0, 0)
    c_ls_right = table_lamp_sig.cell(0, 1)
    
    c_ls_left.width = Inches(3.5)
    c_ls_right.width = Inches(2.77)
    
    set_cell_border(c_ls_left, top={"val": "none"}, bottom={"val": "none"}, left={"val": "none"}, right={"val": "none"})
    set_cell_border(c_ls_right, top={"val": "none"}, bottom={"val": "none"}, left={"val": "none"}, right={"val": "none"})
    
    p_ls = c_ls_right.paragraphs[0]
    p_ls.paragraph_format.space_after = Pt(48)
    p_ls.add_run("BUPATI TULUNGAGUNG,\n").bold = True
    
    p_ls_nama = c_ls_right.add_paragraph()
    p_ls_nama.add_run("MARYOTO BIROWO").bold = True

    # Save document
    output_filename = "PERATURAN_BUPATI_TULUNGAGUNG_NOMOR_33_TAHUN_2022.docx"
    doc.save(output_filename)
    print(f"Document successfully created: {output_filename}")

if __name__ == "__main__":
    create_document()
