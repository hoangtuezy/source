<?php if($config_tenkhongdau){ ?>
<div class="formRow">
    <label>Tên không dấu<br>(Không bắt buộc nhập)</label>

    <div class="formRight">
        <input type="text" name="tenkhongdau" title="Nhập tên không dấu" id="tenkhongdau" class="form-control tipS" value="<?=@$item['tenkhongdau']?>" <?php if($_GET['id']=='') echo 'disabled'; ?> />
        <img src="./images/question-button.png" alt="Nhập tên không dấu" class="icon_question tipS" original-title="Theo định dạng (a-b-c)">
        <div class="note">Ví dụ (dien-thoai-di-dong)</div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" name="chk" id="chk" <?php if($_GET['id']=='') echo 'checked'; ?>>
          <label class="form-check-label">Check đồng bộ với tiêu đề</label>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php } ?>