<div class="audit-card">
    <div class="audit-header">
        <h3>Form Audit Kepatuhan Handover</h3>
        <p>Instrumen penilaian pelaksanaan timbang terima (Handover) Keperawatan berbasis SBAR.</p>
    </div>
    
    <form action="proses/submit_audit.php" method="POST">
        <div class="table-responsive">
            <table class="audit-table">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="50%">Parameter Observasi</th>
                        <th width="10%" style="text-align: center;">Ya</th>
                        <th width="10%" style="text-align: center;">Tidak</th>
                        <th width="25%">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="section-row"><td colspan="5">S - Situation (Situasi)</td></tr>
                    <tr>
                        <td>1</td>
                        <td>Menyebutkan identitas pasien (Nama, Umur, No. RM, dan DPJP)</td>
                        <td class="radio-wrapper"><input type="radio" name="item_1" value="ya" required></td>
                        <td class="radio-wrapper"><input type="radio" name="item_1" value="tidak"></td>
                        <td><input type="text" class="form-input-sm" name="ket_1" placeholder="Catatan..."></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Menjelaskan diagnosa medis dan keluhan utama/masalah keperawatan saat ini</td>
                        <td class="radio-wrapper"><input type="radio" name="item_2" value="ya" required></td>
                        <td class="radio-wrapper"><input type="radio" name="item_2" value="tidak"></td>
                        <td><input type="text" class="form-input-sm" name="ket_2" placeholder="Catatan..."></td>
                    </tr>

                    <tr class="section-row"><td colspan="5">B - Background (Latar Belakang)</td></tr>
                    <tr>
                        <td>3</td>
                        <td>Menjelaskan riwayat penyakit atau tindakan medis/operasi yang sudah dilakukan</td>
                        <td class="radio-wrapper"><input type="radio" name="item_3" value="ya" required></td>
                        <td class="radio-wrapper"><input type="radio" name="item_3" value="tidak"></td>
                        <td><input type="text" class="form-input-sm" name="ket_3" placeholder="Catatan..."></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Menyebutkan riwayat alergi dan terapi yang sedang berjalan (infus, obat, oksigen)</td>
                        <td class="radio-wrapper"><input type="radio" name="item_4" value="ya" required></td>
                        <td class="radio-wrapper"><input type="radio" name="item_4" value="tidak"></td>
                        <td><input type="text" class="form-input-sm" name="ket_4" placeholder="Catatan..."></td>
                    </tr>

                    <tr class="section-row"><td colspan="5">A - Assessment (Penilaian)</td></tr>
                    <tr>
                        <td>5</td>
                        <td>Menyampaikan tanda-tanda vital (TTV), tingkat kesadaran, dan hasil lab/rad terbaru</td>
                        <td class="radio-wrapper"><input type="radio" name="item_5" value="ya" required></td>
                        <td class="radio-wrapper"><input type="radio" name="item_5" value="tidak"></td>
                        <td><input type="text" class="form-input-sm" name="ket_5" placeholder="Catatan..."></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Menjelaskan risiko jatuh, risiko decubitus, dan status nyeri pasien</td>
                        <td class="radio-wrapper"><input type="radio" name="item_6" value="ya" required></td>
                        <td class="radio-wrapper"><input type="radio" name="item_6" value="tidak"></td>
                        <td><input type="text" class="form-input-sm" name="ket_6" placeholder="Catatan..."></td>
                    </tr>

                    <tr class="section-row"><td colspan="5">R - Recommendation (Rekomendasi)</td></tr>
                    <tr>
                        <td>7</td>
                        <td>Menyampaikan intervensi keperawatan yang harus dilanjutkan shift berikutnya</td>
                        <td class="radio-wrapper"><input type="radio" name="item_7" value="ya" required></td>
                        <td class="radio-wrapper"><input type="radio" name="item_7" value="tidak"></td>
                        <td><input type="text" class="form-input-sm" name="ket_7" placeholder="Catatan..."></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Melakukan verifikasi dan validasi secara langsung ke bed pasien (Bedside Handover)</td>
                        <td class="radio-wrapper"><input type="radio" name="item_8" value="ya" required></td>
                        <td class="radio-wrapper"><input type="radio" name="item_8" value="tidak"></td>
                        <td><input type="text" class="form-input-sm" name="ket_8" placeholder="Catatan..."></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="audit-footer">
            <button type="submit" class="btn-submit" style="width: auto; padding: 0.8rem 2.5rem; border-radius: 12px;">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 0.5rem;"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                Simpan Data Audit
            </button>
        </div>
    </form>
</div>