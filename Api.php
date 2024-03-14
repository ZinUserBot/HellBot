<?php
error_reporting(0);
//=-=-=-=-=-=-=-=-=-=-=-=[" Self-Api "]=-=-=-=-=-=-=-=-=-=-=-=
/*

 * Basic MadelineProto-v8
 * Latest Beta-v189
 * Robot  : Self
 * Date   : 2023/05/10
 * Author : @Mahdi_a_8
 * open : sourcekade
 * https://t.me/Sourrce_kade
 
 */
//=-=-=-=--=-=-=-=-=-=[" Start-The-Bot "]=-=-=-=--=-=-=-=-=-=
$telegram_ip_ranges = [
['lower' => '149.154.160.0', 'upper' => '149.154.175.255'],
['lower' => '91.108.4.0', 'upper' => '91.108.7.255']];
$ip_dec = (float)sprintf("%u", ip2long($_SERVER['REMOTE_ADDR']));
$Ok = false;
foreach ($telegram_ip_ranges as $telegram_ip_range) {
if (!$Ok) {
$lower_dec = (float)sprintf("%u", ip2long($telegram_ip_range['lower']));
$upper_dec = (float)sprintf("%u", ip2long($telegram_ip_range['upper']));
if ($ip_dec >= $lower_dec and $ip_dec <= $upper_dec) {
$Ok = true;
}
}
}
if (!$Ok) {
header("Location : https://t.me/Mahdi_a_8");
exit();
}
date_default_timezone_set('Asia/Tehran');
//=-=-=-=--=-=-=-=-=-=[" Include "]=-=-=-=--=-=-=-=-=-=
require_once 'madeline.php';

const API_KEY = "6983151218:AAG7ANMRcqrhkg-DjgLV5gmrVv5p2QipXgk"; // !!! Change this to your Token !!
//=-=-=-=--=-=-=-=-=-=[" Functions-Bot "]=-=-=-=--=-=-=-=-=-=
//Functions
function bot(string $method, array $datas)
{
$ch = curl_init('https://api.telegram.org/bot' . API_KEY . '/' . $method);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
$result = curl_exec($ch);
return curl_error($ch) ? curl_error($ch) : json_decode($result);
}

function EditMessageText($message_id, string $text, ?string $keyboard = null, string $parseMode = 'Markdown'): void
{
bot('editmessagetext', [
'text' => $text,
'inline_message_id' => $message_id,
'parse_mode' => $parseMode,
'disable_web_page_preview' => true,
'reply_markup' => $keyboard
]);
}

function CheckFile(string $Type, string|array $path, string|array|null $File = 'null', ?string $Rep = 'null'): mixed
{
$Result = '';
switch ($Type) {
case 'Open':
$Result = file_get_contents($path);
break;
case 'Save':
if (is_array($path) and is_array($File)) {
$Count = min(count($path), count($File));
for ($i = 0; $i < $Count; $i++) {
file_put_contents($path[$i], $File[$i]);
}
} else {
file_put_contents($path, $File);
}
break;
case 'Replace':
$Result = str_replace($path, $File, $Rep);
break;
case 'Make':
if (is_array($path)) {
foreach ($path as $paths) {
if (!is_dir($paths)) mkdir($paths);
}
} else {
if (!is_dir($path)) mkdir($path);
}
break;
case 'Delete':
if (is_array($path)) {
foreach ($path as $paths) {
if (is_file($paths)) unlink($paths);
}
} else {
if (is_file($path)) unlink($path);
}
break;
case 'SaveJson':
file_put_contents($path, json_encode($File, true));
break;
}
return $Result;
}
//=-=-=-=--=-=-=-=-=-=[" Variables-Bot "]=-=-=-=--=-=-=-=-=-=
//Variables
$update = json_decode(CheckFile("Open", "php://input"));
//=-=-=-=--=-=-=-=-=-=-=-=-=-=[" UPdate "]=-=-=-=--=-=-=-=-=-=-=-=-=-=
$UserID       = $update->callback_query->from->id ?? 0;
$firstname    = $update->callback_query->from->first_name ?? 'No-Name';
$inline       = $update->inline_query->query ?? null;
$inlineid     = $update->inline_query->id ?? 0;
$data         = $update->callback_query->data ?? ' ';
$message_id2  = $update->callback_query->inline_message_id ?? 0;
//=-=-=-=--=-=-=-=-=-=-=-=-=-=[" Variables-Bot "]=-=-=-=--=-=-=-=-=-=-=-=-=-=
$API             = new danog\MadelineProto\API('Self');
$This            = $API->getEventHandler();
$Datas           = $This->Data;
$Information     = $This->Information;
$Admin           = $This->getSelf()['id'];
$OptHashtag      = $Datas['OptHashtag'] ? "• ✅ •" : "• ❌ •";
$OptBold         = $Datas['OptBold'] ? "• ✅ •" : "• ❌ •";
$OptUnderline    = $Datas['OptUnderline'] ? "• ✅ •" : "• ❌ •";
$OptCoding       = $Datas['OptCoding'] ? "• ✅ •" : "• ❌ •";
$OptMention      = $Datas['OptMention'] ? "• ✅ •" : "• ❌ •";
$OptMention2     = $Datas['OptMention2'] ? "• ✅ •" : "• ❌ •";
$OptPart         = $Datas['OptPart'] ? "• ✅ •" : "• ❌ •";
$OptReverse      = $Datas['OptReverse'] ? "• ✅ •" : "• ❌ •";
$OptItalic       = $Datas['OptItalic'] ? "• ✅ •" : "• ❌ •";
$OptDelete       = $Datas['OptDelete'] ? "• ✅ •" : "• ❌ •";
$OptPoker        = $Datas['OptPoker'] ? "• ✅ •" : "• ❌ •";
$ActionTyping    = $Datas['ActionTyping'] ? "• ✅ •" : "• ❌ •";
$ActionGame      = $Datas['ActionGame'] ? "• ✅ •" : "• ❌ •";
$ActionVoice     = $Datas['ActionVoice'] ? "• ✅ •" : "• ❌ •";
$ActionVideo     = $Datas['ActionVideo'] ? "• ✅ •" : "• ❌ •";
$AutoTimeName    = $Datas['AutoTimeName'] ? "• ✅ •" : "• ❌ •";
$AutoTimeAbout   = $Datas['AutoTimeAbout'] ? "• ✅ •" : "• ❌ •";
$Memoryues       = round(memory_get_peak_usage(true) / 1024 / 1024, 2);
$Load            = sys_getloadavg();
$Date            = date("Y/m/d");
$Time            = date("H:i:s");
$Font = array("1" => array('𝟎', '𝟏', '𝟐', '𝟑', '𝟒', '𝟓', '𝟔', '𝟕', '𝟖', '𝟗'),"2" => array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9"),"3" => array("⁰", "¹", "²", "³", "⁴", "⁵", "⁶", "⁷", "⁸", "⁹"),"4" => array("0⃣", "1⃣", "2⃣", "3⃣", "4⃣", "5⃣", "6⃣", "7⃣", "8⃣", "9⃣"),"5" => array("⊘", "҉1", "҉2", "҉3", "҉4", "҉5", "҉6", "҉7", "҉8", "9҉"),"6" => array("⁰", "¹", "²", "³", "⁴", "⁵", "⁶", "⁷", "⁸", "⁹"),"7" => array("⊘", "𝟏", "ᄅ", "Ɛ", "ㄣ", "𝟝", "６", "ㄥ", "８", "𝟗"),"8" => array("𝟎", "𝟙", "𝟸", "𝟑", "𝟜", "𝟻", "𝟔", "𝟟", "𝟾", "𝟗"),"9" => array("❬𝟎❭", "❬𝟏❭", "❬𝟐❭", "❬𝟑❭", "❬𝟒❭", "❬𝟓❭", "❬𝟔❭", "❬𝟕❭", "❬𝟖❭", "❬𝟗❭"),"10" => array("⓪", "①", "②", "③", "④", "⑤", "⑥", "⑦", "⑧", "⑨"),"11" =>array("𝟘", "𝟙", "𝟚", "𝟛", "𝟜", "𝟝", "𝟞", "𝟟", "𝟠", "𝟡"),"12" =>array("𝟶", "𝟷", "𝟸", "𝟹", "𝟺", "𝟻", "𝟼", "𝟽", "𝟾", "𝟿"));
//=-=-=-=--=-=-=-=-=-=-=-=-=-=[" Button-Bot "]=-=-=-=--=-=-=-=-=-=-=-=-=-=
$Panel_Menu = json_encode([
'inline_keyboard' => [
[['text' => "👤 ʜᴇʟᴘ ᴀᴅᴍɪɴ", 'callback_data' => "HelpAdmin"],
['text' => "⚙️ ʜᴇʟᴘ ᴘʀᴀᴄᴛɪᴄᴀʟ", 'callback_data' => "HelpPractical"]],
[['text' => "🔄 ʜᴇʟᴘ ᴏᴘᴛɪᴏɴ", 'callback_data' => "HelpOptions"]],
[['text' => "🧸 ʜᴇʟᴘ ɢᴀᴍᴇ", 'callback_data' => "HelpGame"],
['text' => "♨️ ʜᴇʟᴘ ᴇɴᴇᴍɪᴇꜱ", 'callback_data' => "HelpEnemies"]],
[['text' => "🌐 ʜᴇʟᴘ ᴇɴᴛᴇʀᴛᴀɪɴᴍᴇɴᴛ", 'callback_data' => "HelpEntertainment"]],
[['text' => "♻️ ʜᴇʟᴘ ɢʀᴏᴜᴘꜱ", 'callback_data' => "HelpGroup"],
['text' => "❌ ᴄʟᴏꜱᴇ ᴘᴀɴᴇʟ", 'callback_data' => "Close"]]]]);
//---------------------------------------
$Panel_Bot = json_encode([
'inline_keyboard'=>[
[['text' => "• Panel | پنل •", 'callback_data' => "PanelBot"],
['text' => "• بزودی . . . •", 'callback_data' => "SettingBot"]],
[['text' => "• UPdate | بروزرسانی •", 'callback_data' => "UPdateBot"]]]]);
//---------------------------------------
$Back_Menu = json_encode([
'inline_keyboard' => [
[['text' => "- ฿₳₵₭ -", 'callback_data' => "BackToHome"]]]]);
//---------------------------------------
$Back_Panel = json_encode([
'inline_keyboard' => [
[['text' => "- ฿₳₵₭ -", 'callback_data' => "BackToPanel"]]]]);
//---------------------------------------
$Option_Menu = json_encode([
'inline_keyboard' => [
[['text' => "✠ - Option Hashtag", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptHashtag", "callback_data" => "OptHashtag"]],
[['text' => "✠ - Option Bold", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptBold", "callback_data" => "OptBold"]],
[['text' => "✠ - Option Underline", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptUnderline", "callback_data" => "OptUnderline"]],
[['text' => "✠ - Option Coding", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptCoding", "callback_data" => "OptCoding"]],
[['text' => "✠ - Option Mention", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptMention", "callback_data" => "OptMention"]],
[['text' => "✠ - Option Mention2", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptMention2", "callback_data" => "OptMention2"]],
[['text' => "✠ - Option Part", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptPart", "callback_data" => "OptPart"]],
[['text' => "✠ - Option Reverse", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptReverse", "callback_data" => "OptReverse"]],
[['text' => "✠ - Option Italic", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptItalic", "callback_data" => "OptItalic"]],
[['text' => "✠ - Option Delete", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptDelete", "callback_data" => "OptDelete"]],
[['text' => "✠ - Option Poker", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptPoker", "callback_data" => "OptPoker"]],
[['text' => "✠ - Action Typing", "callback_data" => 'Mr_Mahdi'],
['text' => "$ActionTyping", "callback_data" => "ActionTyping"]],
[['text' => "✠ - Action Game", "callback_data" => 'Mr_Mahdi'],
['text' => "$ActionGame", "callback_data" => "ActionGame"]],
[['text' => "✠ - Action Voice", "callback_data" => 'Mr_Mahdi'],
['text' => "$ActionVoice", "callback_data" => "ActionVoice"]],
[['text' => "✠ - Action Video", "callback_data" => 'Mr_Mahdi'],
['text' => "$ActionVideo", "callback_data" => "ActionVideo"]],
[['text' => "✠ - Auto TimeName", "callback_data" => 'Mr_Mahdi'],
['text' => "$AutoTimeName", "callback_data" => "AutoTimeName"]],
[['text' => "✠ - Auto TimeAbout", "callback_data" => 'Mr_Mahdi'],
['text' => "$AutoTimeAbout", "callback_data" => "AutoTimeAbout"]],
[['text' => "=•=•=•=•=•=•=•==•=•=", "callback_data" => 'Mr_Mahdi']],
[['text' => "✠ - 𝗧𝗶𝗺𝗲", "callback_data" => 'Mr_Mahdi'],
['text' => "$Time", "callback_data" => 'Mr_Mahdi']],
[['text' => "✠ - 𝗗𝗮𝘁𝗲", "callback_data" => 'Mr_Mahdi'],
['text' => "$Date", "callback_data" => 'Mr_Mahdi']],
[['text' => "=•=•=•=•=•=•=•==•=•=", "callback_data" => 'Mr_Mahdi']],
[['text' => "✠ - 𝗠𝗲𝗺𝗼𝗿𝘆 𝗨𝗦𝗶𝗻𝗴", "callback_data" => 'Mr_Mahdi'],
['text' => "$Memoryues", "callback_data" => 'Memory']],
[['text' => "✠ - 𝗣𝗶𝗻𝗴", "callback_data" => 'Mr_Mahdi'],
['text' => "$Load[0]", "callback_data" => 'Mr_Mahdi']],
[['text' => "- ฿₳₵₭ -", "callback_data" => "BackToPanel"]]]]);
//=-=-=-=-=-=-=-=-=-=-=-=-=-[" Start Bot "]=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
if(isset($inline) and str_contains($inline, 'helpbot_')) {
bot('answerInlineQuery',[
'inline_query_id'=> $inlineid,
'results' => json_encode([[
'type' => 'article',
'id' => base64_encode(rand(0,9999)),
'title' => 'Mahdi_a_8',
'input_message_content' => [
'message_text' => "
🙂 سلام ادمین عزیز به پنل پیشرفته ترین سلف خوش آمدید !

👈 لطفا گزینه مورد نظر خود را انتخاب کنید :

=•=•=•=•=•=•=•=•=•=•=•=•=
`🔥 - 𝙓𝙋𝙡𝙪𝙨𝘽𝙤𝙩 - $Time`",
'parse_mode'=>'MarkDown',
'disable_web_page_preview' => true ,
],
'reply_markup' => [
'inline_keyboard' => [
[['text' => "• Panel | پنل •", 'callback_data' => "PanelBot"],
['text' => "• Setting | تنظیمات •", 'callback_data' => "SettingBot"]],
[['text' => "• UPdate | بروزرسانی •", 'callback_data' => "UPdateBot"]],
]
]
]
])
]);
}
//==================== Check Admin Bot ======================
if ($UserID == $Admin) {
//=-=-=-=-=-=-=-=-=-=-=-=-=-[" Panel-Bot "]=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
if ($data == "PanelBot") {
EditMessageText($message_id2,"‼️ - 𝘗𝘢𝘯𝘦𝘭 𝘚𝘦𝘭𝘧 𝘟𝘗𝘭𝘶𝘴 𝘍𝘰𝘳 𝘠𝘰𝘶

=•=•=•=•=•=•=
✠ **• ʜᴇʟᴘ ᴀᴅᴍɪɴ •**
• 👤 • Get the management guide
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ **• ʜᴇʟᴘ ᴘʀᴀᴄᴛɪᴄᴀʟ •**
• ⚙️ • Get a practical guide
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ **• ʜᴇʟᴘ ᴏᴘᴛɪᴏɴ •**
• 🔄 • Get options guide
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ **• ʜᴇʟᴘ ɢᴀᴍᴇ •**
• 🧸 • Get the game guide
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ **• ʜᴇʟᴘ ᴇɴᴇᴍɪᴇꜱ •**
• ♨️ • Get a guide for enemies
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ **• ʜᴇʟᴘ ᴇɴᴛᴇʀᴛᴀɪɴᴍᴇɴᴛ •**
• 🌐 • Get the entertainment guide
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ **• ʜᴇʟᴘ ɢʀᴏᴜᴘꜱ •**
• ♻️ • Get groups guide
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ **• ᴄʟᴏꜱᴇ ᴘᴀɴᴇʟ •**
• ❌ • Close the management panel
=•=•=•=•=•=•=

`🔥 - 𝙓𝙋𝙡𝙪𝙨𝘽𝙤𝙩 - $Time`", $Panel_Menu);
}
//=-=-=-=-=-=-=-=-=-=-=-=-=-[" UPdate-Bot "]=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
elseif ($data == "UPdateBot") {
EditMessageText($message_id2,"🙂 خب ، ادمین عزیز به بخش آپدیت های ربات خوش آمدید !

♻️ لیست اپدیت های اضافه شده به شرح زیر می باشد :

⚙️ رفع باگ های گزارش شده !

🙂 این لیست بعداز هر آپدیت به صورت خودکار بروز میشود . . . !

😉 اگر ایده ای جهت بهتر شدن سلف دارید با ادمین در ارتباط باشید :

🆔 - 𝑺𝒖𝒑𝒑𝒐𝒓𝒕 » [Mahdi_a_8](https://t.me/Mahdi_a_8)", $Back_Menu);
}
//=-=-=-=-=-=-=-=-=-=-=-=-=-[" HelpAdmin "]=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
elseif ($data == "HelpAdmin") {
EditMessageText($message_id2, "👤 - [𝑺𝒆𝒍𝒇 𝑿𝑷𝒍𝒖𝒔](https://t.me/source_s) 𝑯𝒆𝒍𝒑 » [𝗔𝗱𝗺𝗶𝗻](tg://user?id=$Admin) . . . !

=•=•=•=•=•=•=
❈ - `Restart`
✠ - **راه اندازی مجدد ربات**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `Ping`
✠ - **دریافت وضعیت ربات**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `Block` **(REPLY)**
✠ - بلاک کردن شخصی خاص در ربات
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `Unblock` **(REPLY)**
✠ - آزاد کردن شخصی خاص از بلاک در ربات
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `Prof` **(LastName) | (About)**
✠ - **تنظیم نام اسم ,فامیلو بیوگرافی ربات**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `DelRof` **(LastName) | (About)**
✠ - **Del the LastName or About**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `List` **(LastName) | (About)**
✠ - **List the LastName or About**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `Clean` **(LastName) | (About)**
✠ - **Clean the LastName or About**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `Info`
✠ - **دریافت اطلاعات اکانت**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `Config`
✠ - **انجام پیکربندی**
=•=•=•=•=•=•=

🆔 - 𝑺𝒖𝒑𝒑𝒐𝒓𝒕 » [Mahdi_a_8](https://t.me/Mahdi_a_8)", $Back_Panel);
}
//=-=-=-=-=-=-=-=-=-=-=-=-=-[" HelpPractical "]=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
elseif ($data == "HelpPractical") {
EditMessageText($message_id2,"⚙️ - [𝑺𝒆𝒍𝒇 𝑿𝑷𝒍𝒖𝒔](https://t.me/source_s) 𝑯𝒆𝒍𝒑 » [𝗣𝗿𝗮𝗰𝘁𝗶𝗰𝗮𝗹](tg://user?id=$Admin) . . . !

=•=•=•=•=•=•=
✠ - `/info` (USERID)
**❈ - دریافت اطلاعات کاربر**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/flood` (COUNT)-(TEXT)
**❈ - ارسال اسپم یک متن به تعداد دلخواه**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/id` (REPLY)
**❈ - دریافت ایدی عددی کابر**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/php` (CODE)
**❈ - اجرای کد های زبان PHP**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/whois` (DOMAIN)
**❈ - دریافت اطلاعات دامنه مورد نظر**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/scr` (URL)
**❈ - دریافت اسکرین شات از سایت مورد نظر**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/ping` (URL)
**❈ - دریافت پینگ سایت مورد نظر**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/brc` (URL)
**❈ - ساخت QR برای لینک مورد نظر**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/git` **(URL)**
**❈ - دانلود فایل فشرده یک سورس از گیتهاب**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/user` **(USERID)**
**❈ - منشن کردن یک شخص از طریق آیدی عددی**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/delmsg` **(IN THE PV)**
**❈ - پاکسازی پیام ها در چت به صورت دو طرفه**
=•=•=•=•=•=•=

🆔 - 𝑺𝒖𝒑𝒑𝒐𝒓𝒕 » [Mahdi_a_8](https://t.me/Mahdi_a_8)",$Back_Panel);
}
//=-=-=-=-=-=-=-=-=-=-=-=-=-[" HelpEntertainment "]=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
elseif ($data == "HelpEntertainment") {
EditMessageText($message_id2, "🌐 - [𝑺𝒆𝒍𝒇 𝑿𝑷𝒍𝒖𝒔](https://t.me/source_s) 𝑯𝒆𝒍𝒑 » [𝗘𝗻𝘁𝗲𝗿𝘁𝗮𝗶𝗻𝗺𝗲𝗻𝘁](tg://user?id=$Admin) . . . !

=•=•=•=•=•=•=
❈ - `/video` **(TEXT)**
**✠ - Requested video **
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/photo` **(TEXT)**
**✠ - Requested photo **
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/music` **(TEXT)**
**✠ - موزیک درخواستی **
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/gif` **(TEXT)**
**✠ - گیف درخاستی**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/pic` **(TEXT)**
**✠ - عکس درخاستی**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/google` **(TEXT)**
**✠ - سرچ در گوگل**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/youtube` **(TEXT)**
**✠ - سرچ در یوتیوب**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/weather` **(CITY)**
**✠ - وضعیت شهر مورد نظر**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/apk` **(TEXT)**
**✠ - برنامه درخاستی **
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/like` **(TEXT)**
**✠ - گذاشتن دکمه شیشه ای لایک زیر متن**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/meme` **(TEXT)**
**✠ - ویس درخاستی از ربات پرشین میم**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/fonet` **(NAME)**
**✠ - دریافت فونت درخواستی**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/fafont` **(TEXT)**
**✠ - ساخت فونت اسم فارسی شما با 10 مدل مختلف**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/priarz`
**✠ - معکوس کردن جمله شما**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/rev` **(TEXT)**
**✠ - معکوس کردن جمله شما**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/meane` **(TEXT)**
**✠ - دریافت معانی کلمات فارسی**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/kalame` **(LEVEL)**
**✠ - دریافت بازی از ربات کلمه**
**✠ - (مبتدی|ساده|متوسط|سخت|وحشتناک)**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/fall`
**✠ - دریافت فال**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/icon` **(TEXT)**
**✠ - آیکون با کلمه درخاستی و شکلک رندوم**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/lid` **(ID)**
**✠ - برای دریافت لینک آیکون مورد نظر در پیوی خودتان**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `/biorandom`
**✠ - دریافت بیو شانسی**
=•=•=•=•=•=•=

🆔 - 𝑺𝒖𝒑𝒑𝒐𝒓𝒕 » [Mahdi_a_8](https://t.me/Mahdi_a_8)", $Back_Panel);
}
//=-=-=-=-=-=-=-=-=-=-=-=-=-[" HelpOption "]=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
elseif ($data == "HelpOptions") {
EditMessageText($message_id2, "👈 شما در این بخش میتوانید آپشن های ربات خود را فعال یا غیرفعال کنید :", $Option_Menu);
}
//=-=-=-=-=-=-=-=-=-=-=-=-=-[" HelpOption "]=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
elseif (in_array($data, ["OptHashtag", "OptBold", "OptUnderline", "OptCoding", "OptMention", "OptMention2", "OptPart", "OptReverse", "OptItalic", "OptDelete", "OptFontPersian", "OptFontEnghlish", "OptPoker", "ActionTyping", "ActionGame", "ActionVoice", "ActionVideo", "AutoTimeName", "AutoTimeAbout"])) {
switch ($data) {
case 'OptHashtag':
$This->Seter('OptHashtag', !$Datas['OptHashtag']);
break;
case 'OptBold':
$This->Seter('OptBold', !$Datas['OptBold']);
break;
case 'OptUnderline':
$This->Seter('OptUnderline', !$Datas['OptUnderline']);
break;
case 'OptCoding':
$This->Seter('OptCoding', !$Datas['OptCoding']);
break;
case 'OptMention':
$This->Seter('OptMention', !$Datas['OptMention']);
break;
case 'OptMention2':
$This->Seter('OptMention2', !$Datas['OptMention2']);
break;
case 'OptPart':
$This->Seter('OptPart', !$Datas['OptPart']);
break;
case 'OptReverse':
$This->Seter('OptReverse', !$Datas['OptReverse']);
break;
case 'OptItalic':
$This->Seter('OptItalic', !$Datas['OptItalic']);
break;
case 'OptDelete':
$This->Seter('OptDelete', !$Datas['OptDelete']);
break;
case 'OptFontPersian':
$This->Seter('OptFontPersian', !$Datas['OptFontPersian']);
break;
case 'OptFontEnghlish':
$This->Seter('OptFontEnghlish', !$Datas['OptFontEnghlish']);
break;
case 'OptPoker':
$This->Seter('OptPoker', !$Datas['OptPoker']);
break;
case 'ActionTyping':
$This->Seter('ActionTyping', !$Datas['ActionTyping']);
break;
case 'ActionGame':
$This->Seter('ActionGame', !$Datas['ActionGame']);
break;
case 'ActionVoice':
$This->Seter('ActionVoice', !$Datas['ActionVoice']);
break;
case 'ActionVideo':
$This->Seter('ActionVideo', !$Datas['ActionVideo']);
break;
case 'AutoTimeName':
if(!$Datas['AutoTimeName']){
$Menu = json_encode([
'inline_keyboard' => [
[['text' => "- Rand -", 'callback_data' => "Rand-TimeName"],['text' => "- Custom -", 'callback_data' => "castum1"]],
[['text' => "- ฿₳₵₭ -", 'callback_data' => "BackToPanel"]]]]);
}else{
$This->Seter('AutoTimeName', false);
}
break;
case 'AutoTimeAbout':
if(!$Datas['AutoTimeAbout']){
$Menu = json_encode([
'inline_keyboard' => [
[['text' => "- Rand -", 'callback_data' => "Rand-TimeAbout"],['text' => "- Custom -", 'callback_data' => "castum2"]],
[['text' => "- ฿₳₵₭ -", 'callback_data' => "BackToPanel"]]]]);
}else{
$This->Seter('AutoTimeAbout', false);
}
break;
}
$OptHashtag = $This->Data['OptHashtag'] ? "• ✅ •" : "• ❌ •";
$OptBold = $This->Data['OptBold'] ? "• ✅ •" : "• ❌ •";
$OptUnderline = $This->Data['OptUnderline'] ? "• ✅ •" : "• ❌ •";
$OptCoding = $This->Data['OptCoding'] ? "• ✅ •" : "• ❌ •";
$OptMention = $This->Data['OptMention'] ? "• ✅ •" : "• ❌ •";
$OptMention2 = $This->Data['OptMention2'] ? "• ✅ •" : "• ❌ •";
$OptPart = $This->Data['OptPart'] ? "• ✅ •" : "• ❌ •";
$OptReverse = $This->Data['OptReverse'] ? "• ✅ •" : "• ❌ •";
$OptItalic = $This->Data['OptItalic'] ? "• ✅ •" : "• ❌ •";
$OptDelete = $This->Data['OptDelete'] ? "• ✅ •" : "• ❌ •";
$OptPoker = $This->Data['OptPoker'] ? "• ✅ •" : "• ❌ •";
$ActionTyping = $This->Data['ActionTyping'] ? "• ✅ •" : "• ❌ •";
$ActionGame = $This->Data['ActionGame'] ? "• ✅ •" : "• ❌ •";
$ActionVoice = $This->Data['ActionVoice'] ? "• ✅ •" : "• ❌ •";
$ActionVideo = $This->Data['ActionVideo'] ? "• ✅ •" : "• ❌ •";
$AutoTimeName = $This->Data['AutoTimeName'] ? "• ✅ •" : "• ❌ •";
$AutoTimeAbout = $This->Data['AutoTimeAbout'] ? "• ✅ •" : "• ❌ •";
if(isset($Menu)){
bot('editmessagetext', [
'text'=> "👈 شما در این بخش میتوانید تنظیمات تایم در اکانت را مشخص کنید :",
'inline_message_id'=>$message_id2,
'parse_mode'=>'MarkDown',
'reply_markup' => $Menu
]);
}else{
bot('editmessagetext', [
'text'=> "👈 شما در این بخش میتوانید آپشن های ربات خود را فعال یا غیرفعال کنید :",
'inline_message_id'=>$message_id2,
'parse_mode'=>'MarkDown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text' => "✠ - Option Hashtag", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptHashtag", "callback_data" => "OptHashtag"]],
[['text' => "✠ - Option Bold", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptBold", "callback_data" => "OptBold"]],
[['text' => "✠ - Option Underline", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptUnderline", "callback_data" => "OptUnderline"]],
[['text' => "✠ - Option Coding", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptCoding", "callback_data" => "OptCoding"]],
[['text' => "✠ - Option Mention", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptMention", "callback_data" => "OptMention"]],
[['text' => "✠ - Option Mention2", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptMention2", "callback_data" => "OptMention2"]],
[['text' => "✠ - Option Part", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptPart", "callback_data" => "OptPart"]],
[['text' => "✠ - Option Reverse", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptReverse", "callback_data" => "OptReverse"]],
[['text' => "✠ - Option Italic", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptItalic", "callback_data" => "OptItalic"]],
[['text' => "✠ - Option Delete", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptDelete", "callback_data" => "OptDelete"]],
[['text' => "✠ - Option Poker", "callback_data" => 'Mr_Mahdi'],
['text' => "$OptPoker", "callback_data" => "OptPoker"]],
[['text' => "✠ - Action Typing", "callback_data" => 'Mr_Mahdi'],
['text' => "$ActionTyping", "callback_data" => "ActionTyping"]],
[['text' => "✠ - Action Game", "callback_data" => 'Mr_Mahdi'],
['text' => "$ActionGame", "callback_data" => "ActionGame"]],
[['text' => "✠ - Action Voice", "callback_data" => 'Mr_Mahdi'],
['text' => "$ActionVoice", "callback_data" => "ActionVoice"]],
[['text' => "✠ - Action Video", "callback_data" => 'Mr_Mahdi'],
['text' => "$ActionVideo", "callback_data" => "ActionVideo"]],
[['text' => "✠ - Auto TimeName", "callback_data" => 'Mr_Mahdi'],
['text' => "$AutoTimeName", "callback_data" => "AutoTimeName"]],
[['text' => "✠ - Auto TimeAbout", "callback_data" => 'Mr_Mahdi'],
['text' => "$AutoTimeAbout", "callback_data" => "AutoTimeAbout"]],
[['text' => "=•=•=•=•=•=•=•==•=•=", "callback_data" => 'Mr_Mahdi']],
[['text' => "✠ - 𝗧𝗶𝗺𝗲", "callback_data" => 'Mr_Mahdi'],
['text' => "$Time", "callback_data" => 'Mr_Mahdi']],
[['text' => "✠ - 𝗗𝗮𝘁𝗲", "callback_data" => 'Mr_Mahdi'],
['text' => "$Date", "callback_data" => 'Mr_Mahdi']],
[['text' => "=•=•=•=•=•=•=•==•=•=", "callback_data" => 'Mr_Mahdi']],
[['text' => "✠ - 𝗠𝗲𝗺𝗼𝗿𝘆 𝗨𝗦𝗶𝗻𝗴", "callback_data" => 'Mr_Mahdi'],
['text' => "$Memoryues", "callback_data" => 'Memory']],
[['text' => "✠ - 𝗣𝗶𝗻𝗴", "callback_data" => 'Mr_Mahdi'],
['text' => "$Load[0]", "callback_data" => 'Mr_Mahdi']],
[['text' => "- ฿₳₵₭ -", "callback_data" => "BackToPanel"]]
]
])
]);
}
}
elseif (str_contains($data, "Rand-")) {
$Check = explode("-", $data)[1];
if($Check == "TimeName"){
$index = "LastName";
} else {
$index = "About";
}
if (count($Information['Prof'][$index]) > 0){
if(isset($TimeJson['LastName'])){
$This->Seter2("LastName", '');
}
$This->Seter("Auto$Check", true);
$AutoTimeName = $This->Data['AutoTimeName'] ? "• ✅ •" : "• ❌ •";
$AutoTimeAbout = $This->Data['AutoTimeAbout'] ? "• ✅ •" : "• ❌ •";
EditMessageText($message_id2, "👈 شما در این بخش میتوانید آپشن های ربات خود را فعال یا غیرفعال کنید :",$Option_Menu);
} else
EditMessageText($message_id2,"متنی تنظیم نکردی !!", $Back_Panel);
}
elseif ($data == "castum1") {
if (count($Information['Prof']['LastName']) > 0) {
$Counter  = 1;
$inline = array_map(function ($LastName) use(&$Counter,$Font){
$result = [
['text' => $Counter,'callback_data' => "Select-$LastName-{$Font[$Counter][1]}"],
['text' => $LastName, 'callback_data' => "Mr_Mahdi"],
['text' => str_replace(range(0, 9), $Font[$Counter], date("H:i:s")), 'callback_data' => "Mr_Mahdi"]];
++$Counter;
return $result;
},$Information['Prof']['LastName']);
$inline[] =[['text' => "- ฿₳₵₭ -", "callback_data" => "BackToPanel"]];
bot('editmessagetext', [
'text'=> "♻️ با کلیک بر روی شماره هر سطر تنظیم میشود :",
'inline_message_id'=>$message_id2,
'parse_mode'=>'MarkDown',
'reply_markup' => json_encode([
'inline_keyboard' => $inline
])
]);
} else
EditMessageText($message_id2,"متنی تنظیم نکردی !!", $Back_Panel);
}
elseif ($data == "castum2") {
if (count($Information['Prof']['About']) > 0) {
$Counter = 1;
$inline = array_map(function ($About) use(&$Counter,$Font){
$result = [
['text' => $Counter,'callback_data' => "Selected-$About-{$Font[$Counter][1]}"],
['text' => $About, 'callback_data' => "Mr_Mahdi"],
['text' => str_replace(range(0, 9), $Font[$Counter], date("H:i:s")), 'callback_data' => "Mr_Mahdi"]];
++$Counter;
return $result;
},$Information['Prof']['About']);
$inline[] =[['text' => "- ฿₳₵₭ -", "callback_data" => "BackToPanel"]];
bot('editmessagetext', [
'text'=> "♻️ با کلیک بر روی شماره هر سطر تنظیم میشود :",
'inline_message_id'=>$message_id2,
'parse_mode'=>'MarkDown',
'reply_markup' => json_encode([
'inline_keyboard' => $inline
])
]);
} else
EditMessageText($message_id2,"متنی تنظیم نکردی !!", $Back_Panel);
}
elseif (str_contains($data, "Selected-")) {
$Font = [['𝟎', '𝟏', '𝟐', '𝟑', '𝟒', '𝟓', '𝟔', '𝟕', '𝟖', '𝟗'],
["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"],
["⁰", "¹", "²", "³", "⁴", "⁵", "⁶", "⁷", "⁸", "⁹"],
["0⃣", "1⃣", "2⃣", "3⃣", "4⃣", "5⃣", "6⃣", "7⃣", "8⃣", "9⃣"],
["⊘", "҉1", "҉2", "҉3", "҉4", "҉5", "҉6", "҉7", "҉8", "9҉"],
["𝟬", "𝟭", "𝟐", "❬3❭", "𝟜", "5", "❬𝟔❭", "𝟽", "𝟴", "❬𝟗❭"],
["⁰", "¹", "²", "³", "⁴", "⁵", "⁶", "⁷", "⁸", "⁹"],
["⊘", "𝟏", "ᄅ", "Ɛ", "ㄣ", "𝟝", "６", "ㄥ", "８", "𝟗"],
["𝟎", "𝟙", "𝟸", "𝟑", "𝟜", "𝟻", "𝟔", "𝟟", "𝟾", "𝟗"],
["❬𝟎❭", "❬𝟏❭", "❬𝟐❭", "❬𝟑❭", "❬𝟒❭", "❬𝟓❭", "❬𝟔❭", "❬𝟕❭", "❬𝟖❭", "❬𝟗❭"],
["⓪", "①", "②", "③", "④", "⑤", "⑥", "⑦", "⑧", "⑨"],
["𝟘", "𝟙", "𝟚", "𝟛", "𝟜", "𝟝", "𝟞", "𝟟", "𝟠", "𝟡"],
["𝟶", "𝟷", "𝟸", "𝟹", "𝟺", "𝟻", "𝟼", "𝟽", "𝟾", "𝟿"]];
$About = explode("-", $data)[1];
$FontTime = explode("-", $data)[2];
$foundArrays = [];
foreach ($Font as $subArray) {
if (in_array($FontTime, $subArray)) {
$foundArrays[] = $subArray;
}
}
$GetTime = $This->TimeJson;
$GetTime['LastName'] = "";
$GetTime['About'] = $About;
$GetTime['Time'] = $foundArrays;
$This->Seter('AutoTimeAbout', true);
$AutoTimeName = $This->Data['AutoTimeName'] ? "• ✅ •" : "• ❌ •";
$AutoTimeAbout = $This->Data['AutoTimeAbout'] ? "• ✅ •" : "• ❌ •";
EditMessageText($message_id2, "👈 شما در این بخش میتوانید آپشن های ربات خود را فعال یا غیرفعال کنید :",$Option_Menu);
}
elseif (str_contains($data, "Select-")) {
$Font = [['𝟎', '𝟏', '𝟐', '𝟑', '𝟒', '𝟓', '𝟔', '𝟕', '𝟖', '𝟗'],
["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"],
["⁰", "¹", "²", "³", "⁴", "⁵", "⁶", "⁷", "⁸", "⁹"],
["0⃣", "1⃣", "2⃣", "3⃣", "4⃣", "5⃣", "6⃣", "7⃣", "8⃣", "9⃣"],
["⊘", "҉1", "҉2", "҉3", "҉4", "҉5", "҉6", "҉7", "҉8", "9҉"],
["𝟬", "𝟭", "𝟐", "❬3❭", "𝟜", "5", "❬𝟔❭", "𝟽", "𝟴", "❬𝟗❭"],
["⁰", "¹", "²", "³", "⁴", "⁵", "⁶", "⁷", "⁸", "⁹"],
["⊘", "𝟏", "ᄅ", "Ɛ", "ㄣ", "𝟝", "６", "ㄥ", "８", "𝟗"],
["𝟎", "𝟙", "𝟸", "𝟑", "𝟜", "𝟻", "𝟔", "𝟟", "𝟾", "𝟗"],
["❬𝟎❭", "❬𝟏❭", "❬𝟐❭", "❬𝟑❭", "❬𝟒❭", "❬𝟓❭", "❬𝟔❭", "❬𝟕❭", "❬𝟖❭", "❬𝟗❭"],
["⓪", "①", "②", "③", "④", "⑤", "⑥", "⑦", "⑧", "⑨"],
["𝟘", "𝟙", "𝟚", "𝟛", "𝟜", "𝟝", "𝟞", "𝟟", "𝟠", "𝟡"],
["𝟶", "𝟷", "𝟸", "𝟹", "𝟺", "𝟻", "𝟼", "𝟽", "𝟾", "𝟿"]];
$LastName = explode("-", $data)[1];
$FontTime = explode("-", $data)[2];
$foundArrays = [];
foreach ($Font as $subArray) {
if (in_array($FontTime, $subArray)) {
$foundArrays[] = $subArray;
}
}
$GetTime = $This->TimeJson;
$GetTime['LastName'] = $LastName;
$GetTime['About'] = "";
$GetTime['Time'] = $foundArrays;
$This->Seter('AutoTimeName', true);
$AutoTimeName = $This->Data['AutoTimeName'] ? "• ✅ •" : "• ❌ •";
$AutoTimeAbout = $This->Data['AutoTimeAbout'] ? "• ✅ •" : "• ❌ •";
EditMessageText($message_id2, "👈 شما در این بخش میتوانید آپشن های ربات خود را فعال یا غیرفعال کنید :",$Option_Menu);
}

//=-=-=-=-=-=-=-=-=-=-=-=-=-[" HelpGame "]=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
elseif ($data == "HelpGame") {
EditMessageText($message_id2, "🧸 - [𝑺𝒆𝒍𝒇 𝑿𝑷𝒍𝒖𝒔](https://t.me/source_s) 𝑯𝒆𝒍𝒑 » [𝗚𝗮𝗺𝗲](tg://user?id=$Admin) . . . !

=•=•=•=•=•=•=
✠ - `روانی`
✠ - `ساک`
✠ - `جق`
✠ - `جقیم`
✠ - `عشق`
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `آدم فضایی`
✠ - `بکیرم`
✠ - `بکیرمم`
✠ - `خخخ`
✠ - `کص ننت`
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `کل`
✠ - `صکصی`
✠ - `موشک`
✠ - `پول`
✠ - `حالم بده`
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `جن`
✠ - `برم خونه`
✠ - `قلب`
✠ - `فرار از خونه`
✠ - `عقاب`
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `حموم`
✠ - `بکشش`
✠ - `مسجد`
✠ - `کوسه`
✠ - `بارون`
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `بادکنک`
✠ - `شب خوش`
✠ - `فیش`
✠ - `فوتبال`
✠ - `برم بخابم`
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `غرقش کن`
✠ - `فضانورد`
✠ - `ایول`
✠ - `فیل`
✠ - `بشمار`
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `بمیر کرونا`
✠ - `انگش`
✠ - `ریدم`
✠ - `مربع`
✠ - `مکعب`
✠ - `دنس`
✠ - `ساعت`
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `دیک`
✠ - `رقص`
✠ - `خار`
✠ - `گلب`
✠ - `آها`
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `ماشین`
✠ - `موتور`
✠ - `پلانتی`
✠ - `تانک`
✠ - `بکش`
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `بیا بالا`
✠ - `قلب2`
✠ - `لامپ`
✠ - `شب`
✠ - `بکششش`
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `تاس`
✠ - `جر`
✠ - `بای`
✠ - `چطوری`
✠ - `رقص3`
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `مربع3`
✠ - `اوخی`
✠ - `قهرم`
✠ - `بوس`
✠ - `تپش`
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `سگ`
✠ - `هلیکوپتر`
✠ - `قلبز`
✠ - `پلیس`
✠ - `هزار پا`
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `زنبور`
✠ - `تتلو`
✠ - `کصخل`
=•=•=•=•=•=•=

🆔 - 𝑺𝒖𝒑𝒑𝒐𝒓𝒕 » [Mahdi_a_8](https://t.me/Mahdi_a_8)", $Back_Panel);
}
//=-=-=-=-=-=-=-=-=-=-=-=-=-[" HelpEnemies "]=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
elseif ($data == "HelpEnemies") {
EditMessageText($message_id2, "
♨️ - [𝑺𝒆𝒍𝒇 𝑿𝑷𝒍𝒖𝒔](https://t.me/source_s) 𝑯𝒆𝒍𝒑 » [𝗘𝗻𝗲𝗺𝗶𝗲𝘀](tg://user?id=$Admin) . . . !

=•=•=•=•=•=•=
✠ - `/fohsh`
**❈ - ارسال فحش به صورت رگباری**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/fohsh1`
**❈ - ارسال فحش به صورت فوروارد**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/foren`
**❈ - ارسال فحش به زبان خارجی**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/Spam2`
**❈ - اسپم در پیوی مورد نظر**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/Atack`
**❈ - اتک در پیوی مورد نظر**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/setanswer` **(Msg) | (Ans)**
❈ - **تنظیم متن و پاسخ متن خودکار**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/delanswer` **(Text)**
❈ - **حذف یک پاسخ از لیست**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/answerlist`
❈ - **دریافت لیست پاسخ**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/cleananswers`
❈ - **پاکسازی لیست پاسخ**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/setenemy` **(REPLY)**
**❈ - افزودن یک کاربر به لیست دشمنان**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/delenemy` **(REPLY)**
**❈ - حذف یک کاربر به لیست دشمنان**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/enemylist`
**❈ - نمایش لیست دشمنان**
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ - `/cleanenemylist`
**❈ - پاکسازی لیست دشمنان**
=•=•=•=•=•=•=

🆔 - 𝑺𝒖𝒑𝒑𝒐𝒓𝒕 » [Mahdi_a_8](https://t.me/Mahdi_a_8)", $Back_Panel);
}
//=-=-=-=-=-=-=-=-=-=-=-=-=-[" HelpGroup "]=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
elseif ($data == "HelpGroup") {
EditMessageText($message_id2, "♻️ - [𝑺𝒆𝒍𝒇 𝑿𝑷𝒍𝒖𝒔](https://t.me/source_s) 𝑯𝒆𝒍𝒑 » [𝗚𝗿𝗼𝘂𝗽](tg://user?id=$Admin) . . . !

=•=•=•=•=•=•=
❈ - `Cleanall`
**✠ - پاکسازی تمامی پیام های گروه در صورت ادمین بودن **
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `Infogap` **(In The Group)**
**✠ - دریافت اطلاعات گروه**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `Delgaps`
❈ - **خروج از همه ی گروه ها**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `Delgap` ** (Count)**
❈ - **خروج از کانال ها به تعداد موردنظر**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `Tag` ** (Count)**
**✠ - تگ کردن افراد گروه به تعداد دلخواه**
=•=•=•=•=•=•=•=•=•=•=•=•=
❈ - `Left` **(In The Group)**
❈ - **خروج از یک کانال یا گروه**
=•=•=•=•=•=•=

🆔 - 𝑺𝒖𝒑𝒑𝒐𝒓𝒕 » [Mahdi_a_8](https://t.me/Mahdi_a_8)", $Back_Panel);
}
//=-=-=-=-=-=-=-=-=-=-=-=-=[" Close-Panel "]=-=-=-=-=-=-=-=-=-=-=-=-=
elseif ($data == "Close") {
EditMessageText($message_id2, "💢 پنل باموفقیت بسته شد . . . !");
}
//=-=-=-=-=-=-=-=-=-=-=-=-=[" Show-Mahdi "]=-=-=-=-=-=-=-=-=-=-=-=-=
elseif ($data == "Mr_Mahdi") {
bot('answerCallbackQuery', [
'callback_query_id' => $inlineid,
'text' => "✠ - این دکمه تنها جهت نمایش می باشد !",
'show_alert' => true
]);
}
//=-=-=-=-=-=-=-=-=-=-=-=-=[" Back-To-Home "]=-=-=-=-=-=-=-=-=-=-=-=-=
elseif ($data == "BackToHome") {
EditMessageText($message_id2, "
🙂 سلام ادمین عزیز به پنل پیشرفته ترین سلف خوش آمدید !

👈 لطفا گزینه مورد نظر خود را انتخاب کنید :

=•=•=•=•=•=•=•=•=•=•=•=•=
`🔥 - 𝙓𝙋𝙡𝙪𝙨𝘽𝙤𝙩 - $Time`", $Panel_Bot);
}
//=-=-=-=-=-=-=-=-=-=-=-=-=[" Back-To-Panel "]=-=-=-=-=-=-=-=-=-=-=-=-=
elseif ($data == "BackToPanel") {
EditMessageText($message_id2, "
‼️ - 𝘗𝘢𝘯𝘦𝘭 𝘚𝘦𝘭𝘧 𝘟𝘗𝘭𝘶𝘴 𝘍𝘰𝘳 𝘠𝘰𝘶

=•=•=•=•=•=•=
✠ **• ʜᴇʟᴘ ᴀᴅᴍɪɴ •**
• 👤 • Get the management guide
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ **• ʜᴇʟᴘ ᴘʀᴀᴄᴛɪᴄᴀʟ •**
• ⚙️ • Get a practical guide
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ **• ʜᴇʟᴘ ᴏᴘᴛɪᴏɴ •**
• 🔄 • Get options guide
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ **• ʜᴇʟᴘ ɢᴀᴍᴇ •**
• 🧸 • Get the game guide
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ **• ʜᴇʟᴘ ᴇɴᴇᴍɪᴇꜱ •**
• ♨️ • Get a guide for enemies
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ **• ʜᴇʟᴘ ᴇɴᴛᴇʀᴛᴀɪɴᴍᴇɴᴛ •**
• 🌐 • Get the entertainment guide
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ **• ʜᴇʟᴘ ɢʀᴏᴜᴘꜱ •**
• ♻️ • Get groups guide
=•=•=•=•=•=•=•=•=•=•=•=•=
✠ **• ᴄʟᴏꜱᴇ ᴘᴀɴᴇʟ •**
• ❌ • Close the management panel
=•=•=•=•=•=•=

`🔥 - 𝙓𝙋𝙡𝙪𝙨𝘽𝙤𝙩 - $Time`", $Panel_Menu);
}
} else {
bot('answerCallbackQuery', [
'callback_query_id' => $inlineid,
'text' => "❌ شما ادمین ربات نمی باشید . . . !",
'show_alert' => true
]);
}
//=-=-=-=-=-=-=-=-=-=-=-=[" Self-Api "]=-=-=-=-=-=-=-=-=-=-=-=
/*

 * Basic MadelineProto-v8
 * Latest Beta-v189
 * Robot  : Self
 * Date   : 2023/05/10
 * Author : @Mahdi_a_8
 * open : sourcekade
 * https://t.me/Sourrce_kade
 
 */
//=-=-=-=--=-=-=-=-=-=[" End-The-Bot "]=-=-=-=--=-=-=-=-=-=