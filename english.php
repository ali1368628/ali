<?php
if ($data == "gpenglish" ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo ) {
     file_put_contents("data/$cllchatid/lang.txt", "english");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"The group has been add –
 and was set English language ", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  	 [
		['text'=>"~Â» gp setting",'callback_data'=>"bag"]
	  ],
	   [
	  ['text'=> "SUPER APIðŸ’¡" ,'url'=>"http://telegram.me/super_api"]
	  ]
   ]
   ])
   ]);
   }   
   }
   
 if( $lang12 == "english" ){  
     if($data == "settingslang" ){
  if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"` Please select your language`",
 'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	   [
 		['text'=>"ðŸ‡®ðŸ‡¶arabiðŸ‡®ðŸ‡¶",'callback_data'=>"gparabi"],		
	  ],
	  [
		['text'=>"ðŸ‡¦ðŸ‡ºEnglishðŸ‡¦ðŸ‡º",'callback_data'=>"gpenglish"],
	  ],
	  [
	   ['text'=>"ðŸ‡­ðŸ‡ºÙØ§Ø±Ø³ÛŒðŸ‡®ðŸ‡·",'callback_data'=>"gppersian"]
	  ]
   ]
   ])
   ]);
    }
    }
    }
   //================Ø§Ù„Ø¹Ø¯Ø§Ø¯==============

if ($from_id == $sudo  ) {
if ($text == "/panel"){
$allgp_get = file_get_contents('data/allgp.txt');
		$get_gp= explode("\n",$allgp_get);
		$geted = count($get_gp) - 1;
		$allmem_ = file_get_contents('data/members.txt');
		$get_all= explode("\n",$allmem_);
		$getall = count($get_all) - 1;
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"ðŸŽ‹`all message in gp ~Â» $allmsg
ðŸŽ‹all messages in pv ~Â» $allmsgpv
ðŸŽ‹all members ~Â» $getall
ðŸŽ‹all gp add ~Â» $geted`",
 'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"super api", 'url'=>"https://telegram.me/super_api"]
    ]
    ]
    ])
    ]);
    }
}
if( $lang1 == "english" ){
if ($text == "/id"   ){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"ðŸ` your name : $name
ðŸ your id : $from_id
ðŸ your username `: @$user `
â€¢~~~~~~~~~~~~â€¢
ðŸ gp name : $gp_name
ðŸ gp id : $chat_id 
â€¢~~~~~~~~~~~~â€¢
ðŸ your warn : ($warn_1 | $warn)`",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'MARKDOWN',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
   ]
   ])
   ]);
   }    
   }
//========================== Ø§Ù„Ø·Ø±Ø¯ ===============
if( $lang1 == "english" ){
if($you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
if($re && $text =="/kick"){
sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"member has been kick ðŸ‘ž",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'html',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	 [
	  ['text'=> $re_name ,'url'=>"http://telegram.me/" . $re_user]
	  ]
   ]
   ])
   ]);
   }    
   }
   }
   if( $lang1 == "english" ){
 if($re && $you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
 if (strpos($textmessage,"/kick") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
      ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"member has been kick ðŸ‘ž",
             'reply_to_message_id'=>$message->message_id,
    ]);
    }    
    }
    } //by  < Munir > @wonds1
    }
if( $lang1 == "english" ){
 if($you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
if($re && $text =="/ban"){
sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id, // by @wounds1 = mounir
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"member has been banned ðŸš«",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'html',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	 [
	  ['text'=> $re_name ,'url'=>"http://telegram.me/" . $re_user]
	  ]
	  ]
   ])
   ]);
   }    
   }
   }
 if( $lang1 == "english" ){
 if($re && $you == "creator" or $you == "administrator" or $from_id == $sudo  ) {
 if (strpos($textmessage,"/ban") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "" && $text['1'] != "Ø§Ù„Ø­Ø¸Ø±" && $text['1'] != "Ø­Ø¸Ø±") {
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
      ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"member has been banned   ðŸš«",
             'reply_to_message_id'=>$message->message_id,
     ]);
     }    
     }
     }
     }
     if( $lang1 == "english" ){
     if($you == "creator" or $you == "administrator" or $from_id == $sudo   ) {
 if($message->reply_to_message && $text == "/unban" ){
bot('unbanChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id,
   ]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'ðŸ’¡ member has been unban ðŸ”š',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
     [
     ['text'=>$message->reply_to_message->from->first_name, 'url'=>"https://telegram.me/".$message->reply_to_message->from->username]
     ]
     ]
     ])
     ]);
     } 
     }
     }
     if( $lang1 == "english" ){
 if($you == "creator" or $you == "administrator" or $from_id == $sudo   ) {
 if (strpos($textmessage,"/unban") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
 	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
        ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
          'text'=>'ðŸ’¡ member has been unban ðŸ”š',
             'reply_to_message_id'=>$message->message_id,
   ]);   
   }    
   }
   }
   }
// ====================== Ø§Ù„ÙƒØªÙ… =================
if( $lang1 == "english" ){
if($text == "/silent" && $re && !in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ðŸ¤  member has been add to silent list  âœ‹ðŸ»ï¸",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ]
    ]
    ])
]);

file_put_contents("data/$chat_id/silent.txt", "\n" . $re_id, FILE_APPEND);
}
}
}
if( $lang1 == "english" ){
if($text == "/silent" && $re && in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"â™£ï¸ member already add to silent list âž–",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ]
    ]
    ])
]);
}
}
}
if( $lang1 == "english" ){
if($text == "/unsilent" && $re && in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ðŸ˜¬  member has been remov to silent list âœ…",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ]
    ]
    ])
]);

$super_api = file_get_contents("data/$chat_id/silent.txt");
$super_api = str_replace($re_id,'',$super_api);
$super_api = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $o);
file_put_contents("data/$chat_id/silent.txt", $super_api);
}
}
}
if( $lang1 == "english" ){
if($text == "/unsilent" && $re && !in_array($re_id, $super_silent)){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ðŸ‘â€ðŸ—¨ member already remov to silent list ðŸ’¢",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ]
    ]
    ])
]);
}
}
}
 //========================== ÙˆØ¶Ø¹ ØªØ±Ø­ÙŠØ¨ ===============
    
     if( $lang12 == "english" ){
     if ($data == "welcom" ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
     file_put_contents("data/$cllchatid/welcome.txt", "setwelcom");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"_ Please send me the new welcome_ ðŸ”ƒ ", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "ØªØ§Ù„Ø¹ ðŸ’¡" ,'url'=>"http://telegram.me/super_api"]
	  ],
	  	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
     ]);
     } 
     }
         }
     if( $lang1 == "english" ){
  if ($getwelcome == "setwelcom" ){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo  ){
     file_put_contents("data/$chat_id/welcome.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"i'm now saved âœ…", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ],
	  [
 		['text'=>"Back ðŸ”™",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
    }
    
     if( $lang1 == "english" ){   
    if($new_member  ){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$getwelcome", 
      'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
 		]
  		])
   ]);
   } 
}
 //========================== Ø§Ù„Ù…Ø³Ø§Ø¹Ø¯Ø© ===============  
    
     if( $lang1 == "english" ){
     if ($you == "creator" or $you == "administrator" or $from == $sudo   ){
if($text == '/help'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"This list is only for admin ðŸ¤ 
Click on what you want and control your group orders âš›
Â By touching the keyboard âœ‹ðŸ»",
                           'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	 	['text'=>"~Â»  setting media ðŸ”’",'callback_data'=>"help"]
	  ],
	  [
  	['text'=>"~Â»  setting gp ðŸ•´",'callback_data'=>"ss"]
	  ],
	   [
  	['text'=>"~Â» setting language ðŸ—£",'callback_data'=>"settingslang"]
	  ],
   [
  	['text'=>"~Â»  Developers ðŸŽ­",'callback_data'=>"dev"]
	  ]
   ]
   ])
   ]);
   } 
   }
   }
   if ( $lang12 == "english"){
  if($data == 'bag'){
  if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo ){
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>" This list is only for admin ðŸ¤ 
Click on what you want and control your group orders âš›
Â By touching the keyboard âœ‹ðŸ»",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	  [
	  	['text'=>"~Â»  setting media ðŸ”’",'callback_data'=>"help"]
 	  ],
	   [
  		['text'=>"~Â»  setting gp ðŸ•´",'callback_data'=>"ss"]
 	  ],
 	  [
  	['text'=>"~Â» setting language ðŸ—£",'callback_data'=>"settingslang"]
	  ],
	   [
	  	['text'=>"~Â»  Developers ðŸŽ­",'callback_data'=>"dev"]
	   ]
    ]
    ])
    ]);
    }
    else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
       ]);
       }
       } 
       }
       elseif ($data == 'dev' )
      {
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"bot programmer by @imkind ðŸ˜Š",
       ]);
       }   
 //========================== rules ===============
    
     if( $lang12 == "english" ){
      if ($data == "rules" ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ){
     file_put_contents("data/$cllchatid/rules.txt", "setrules");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"Please now send new gp rules ðŸ”ƒ", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "ØªØ§Ù„Ø¹ ðŸ’¡" ,'url'=>"http://telegram.me/super_api"]
	  ],
	  [
	 	['text'=>"Back ðŸ”™",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
     ]);
     } 
     }
         }
     if( $lang1 == "english" ){
  if ($getruels == "setrules" ){
if ($you == "creator" or $you == "administrator" or $from_id == $sudo   ){
     file_put_contents("data/$chat_id/rules.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" i'm now savedâœ…", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ],
	  [
 		['text'=>"Back ðŸ”™",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
    }
     if( $lang1 == "english" ){
 if($text == '/rules'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"$getruels",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=>"super api ðŸŒ" ,'url'=>"http://telegram.me/super_api"]
	  ]
   ]
   ])
   ]);
   }
   }
 //==========================Ø§Ù„Ø±Ø§Ø¨Ø· ===============
    
if( $lang12 == "english" ){ 
     if ($data == "setlink" ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ){
     file_put_contents("data/$cllchatid/gplink.txt", "setlink");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>" ðŸ”ƒ*Please now send new go link* ðŸŒ", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "ØªØ§Ù„Ø¹ ðŸ’¡" ,'url'=>"http://telegram.me/super_api"]
	  ],
	  [
		['text'=>"Back ðŸ”™",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
     ]);
     } 
     }
     }
     if( $lang1 == "english" ){
  if ($gplink == "setlink" ){
if ($you == "creator" or $you == "administrator" or $from == $sudo   ){
     file_put_contents("data/$chat_id/gplink.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" i'm now savedâœ…", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=>"super api ðŸ’¡" ,'url'=>"http://telegram.me/super_api"]
	  ],
	  [
 		['text'=>"Back ðŸ”™",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
   }
if( $lang1 == "english" ){
if($text == 'Ø§Ù„Ø±Ø§Ø¨Ø·'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
              'text' =>"$gplink",
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
   ]
   ])
   ]);
   }    
   }  
if( $lang12 == "english" ){
if($data == 'help'){
sendaction($chat_id, typing);
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
					[
					['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
					[
					['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
     	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
    	 ],
      [
	     ['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	     ],
      [
     	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	     ],
      [
	     ['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	     ],
      [
     	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	     ],
	     [
     	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	     ],
	     [
	     ['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	     ],
	 	   [
	     ['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	     ],
	     [
	     ['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	     ],
	 	   [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
      ]
      ])
      ]);
      }    }
if( $lang12 == "english" ){
 if ( $data == "link" && $link12 == "âŒ") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/link.txt","âœ…");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
    	 [
    	 ['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"âœ…",'callback_data'=>"link"]
							],
					[
					['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
     	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
    	 ],
      [
	     ['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	     ],
      [
     	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	     ],
      [
	     ['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	     ],
      [
     	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	     ],
	     [
     	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	     ],
	     [
	     ['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	     ],
	 	   [
	     ['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	     ],
	     [
	     ['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	     ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
 	    ]
      ])
      ]);
      } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "link" && $link12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/link.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
		 			[
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"âŒ",'callback_data'=>"link"]
 					],
						[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
		 			],
		 			[
      	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
     	 ],
       [
      	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
     	 ],
       [
      	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
     	 ],
       [
      	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
     	 ],
       [
      	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
     	 ],
     	 [
      	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	      ],
	      [
      	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
     	 ],
   	 	 [
      	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
     	 ],
    	  [
      	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
     	 ],
       [
    		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
    	  ]
       ]
       ])
       ]);   
       }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}

   }
if( $lang12 == "english" ){
if ( $data == "tag" && $tag12 == "âŒ") {
 if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/tag.txt","âœ…");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"âœ…",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "tag" && $tag12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/tag.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"âŒ",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}   }
if( $lang12 == "english" ){
if ( $data == "photo" && $photo12 == "âŒ") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/photo.txt","âœ…");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"âœ…",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "photo" && $photo12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/photo.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"âŒ",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}


   }
if( $lang12 == "english" ){
if ( $data == "fwd" && $fwd12 == "âŒ") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/fwd.txt","âœ…");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"âœ…",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "fwd" && $fwd12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/fwd.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"âŒ",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}





   }
if( $lang12 == "english" ){
if ( $data == "game" && $game12 == "âŒ") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/game.txt","âœ…");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"âœ…",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]		
      ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "game" && $game12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/game.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"âŒ",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}
   }
if( $lang12 == "english" ){
if ( $data == "video" && $video12 == "âŒ") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/video.txt","âœ…");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"âœ…",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "video" && $video12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/video.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"âŒ",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}
   }
if( $lang12 == "english" ){
if ( $data == "voice" && $voice12 == "âŒ") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/voice.txt","âœ…");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"âœ…",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   //by  < Munir > @wonds1
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "voice" && $voice12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/voice.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"âŒ",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}

   }
if( $lang12 == "english" ){
if ( $data == "audio" && $audio12 == "âŒ") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/audio.txt","âœ…");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"âœ…",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "audio" && $audio12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/audio.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"âŒ",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}

   }
if( $lang12 == "english" ){
if ( $data == "file" && $doc12 == "âŒ") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/doc.txt","âœ…");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"âœ…",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "file" && $doc12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/doc.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"âŒ",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}


   }
if( $lang12 == "english" ){
if ( $data == "all" && $text12 == "âŒ") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

  file_put_contents("data/$cllchatid/text.txt","âœ…");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					], //the file by mounir
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"âœ…",'callback_data'=>"all"]
	 ],
	 	  [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "all" && $text12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {

 file_put_contents("data/$cllchatid/text.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"$sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"âŒ",'callback_data'=>"all"]
	 ],
	  [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}
   }
if( $lang12 == "english" ){
if ( $data == "sticker" && $sticker12 == "âŒ") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
  file_put_contents("data/$cllchatid/sticker.txt","âœ…");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"âœ…",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }   }
if( $lang12 == "english" ){
 if ( $data == "sticker" && $sticker12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/sticker.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"links ðŸŒ",'callback_data'=>"link"],['text'=>"$link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ðŸ¦Š",'callback_data'=>"sticker"],['text'=>"âŒ",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ðŸ‘â€ðŸ—¨",'callback_data'=>"photo"],	 ['text'=>"$photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag (@/#) ðŸ’±",'callback_data'=>"tag"],	 ['text'=>"$tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"forward ðŸ”",'callback_data'=>"fwd"],	 ['text'=>"$fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ðŸŽ®",'callback_data'=>"game"],	 ['text'=>"$game12 ",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ðŸŽž",'callback_data'=>"video"],	 ['text'=>"$video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ðŸŽ¤",'callback_data'=>"voice"],	 ['text'=>"$voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ðŸŽ¼",'callback_data'=>"audio"],	 ['text'=>"$audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ðŸ“¦",'callback_data'=>"file"],	 ['text'=>"$doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all members ðŸ‘¥",'callback_data'=>"all"],	 ['text'=>"$text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"],['text'=>"ðŸ”œnext",'callback_data'=>"next"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}
}







  
if( $lang12 == "english" ){
if ( $data == "next") {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	      [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }
 
   }
if( $lang12 == "english" ){
  if ( $data == "location" && $location12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/location.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"âŒ",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }
 
   }
if( $lang12 == "english" ){
 if ( $data == "location" && $location12 == "âŒ" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/location.txt","âœ…");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"âœ…",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }
   }
if( $lang12 == "english" ){
 if ( $data == "contact" && $contact12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/contact.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"âŒ",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "english" ){
if ( $data == "contact" && $contact12 == "âŒ" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/contact.txt","âœ…");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"âœ…",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "english" ){
if ( $data == "edit" && $edit12 == "âŒ" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/edit.txt","âœ…");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"âœ…",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }  }
if( $lang12 == "english" ){
if ( $data == "edit" && $edit12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/edit.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"âŒ",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "english" ){
if ( $data == "marabi" && $marabi12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/marabi.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"âŒ",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }  }
if( $lang12 == "english" ){
if ( $data == "marabi" && $marabi12 == "âŒ" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/marabi.txt","âœ…");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"âœ…",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "english" ){
if ( $data == "mpersian" && $mpersian12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/mpersian.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"âŒ",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "english" ){
if ( $data == "mpersian" && $mpersian12 == "âŒ" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/mpersian.txt","âœ…");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"âœ…",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }

  }
if( $lang12 == "english" ){
if ( $data == "menglish" && $menglish12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/menglish.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"$menglish12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"âŒ",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }
  }
if( $lang12 == "english" ){
if ( $data == "menglish" && $menglish12 == "âŒ" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/menglish.txt","âœ…");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"âœ…",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }

  }
if( $lang12 == "english" ){
if ( $data == "Long_list" && $long_list12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/long_list.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"âŒ",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }

  }
if( $lang12 == "english" ){
if ( $data == "Long_list" && $long_list12 == "âŒ" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/long_list.txt","âœ…");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"spam ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"âœ…",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"$gif12",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }  }
if( $lang12 == "english" ){
if ( $data == "gif" && $gif12 == "âœ…" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/gif.txt","âŒ");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"persian ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"âŒ",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }  }
if( $lang12 == "english" ){
if ( $data == "gif" && $gif12 == "âŒ" ) {
  if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 file_put_contents("data/$cllchatid/gif.txt","âœ…");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>"my friend this is list for media âš“ï¸
Press the button to control the lock and open the media
Locked media == âŒ
Open media == âœ… ",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
        [
						['text'=>"location â•",'callback_data'=>"location"],['text'=>"$location12",'callback_data'=>"location"]
	 				],
	 				[
						['text'=>"contact ðŸ“ž",'callback_data'=>"contact"],['text'=>"$contact12",'callback_data'=>"contact"]
	 				],
	 				[
						['text'=>"edit ðŸ€„ï¸",'callback_data'=>"edit"],['text'=>"$edit12",'callback_data'=>"edit"]
	 				],
	 				[
						['text'=>"ï¸arabi ðŸ‡®ðŸ‡¶",'callback_data'=>"marabi"],['text'=>"$marabi12",'callback_data'=>"marabi"]
	 				],
	 				[
						['text'=>"persian ðŸ‡®ðŸ‡·ï¸",'callback_data'=>"mpersian"],['text'=>"$mpersian12",'callback_data'=>"mpersian"]
	 				],
	 				[
						['text'=>"English ðŸ‡¦ðŸ‡ºï¸",'callback_data'=>"menglish"],['text'=>"$menglish12",'callback_data'=>"menglish"]
	 				],	
	  			[
						['text'=>"persian ðŸ—’ï¸",'callback_data'=>"Long_list"],['text'=>"$long_list12",'callback_data'=>"Long_list"]
	 				],
	 				[
						['text'=>"gif ðŸ’ ï¸",'callback_data'=>"gif"],['text'=>"âœ…",'callback_data'=>"gif"]
	 				],
   	 	 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"help"]
    	  ]											
       ]
       ])
       ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
 }


  }
if( $lang12 == "english" ){
if($data == "ss"  ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
if (!file_exists("data/$cllchatid/warn/helll.txt")) {
    mkdir("data/$cllchatid/warn");   
     bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  /kick [ id / reply ] to kick a member ðŸ‘ž
/ban ~Â» [ id / reply ] to ban member â›“
/unban [ id / reply ] to lift the ban âš–
/del ~Â» [ reply ] to clear message by reply ðŸ—‘
Â«~~~~~~~~~~~~~~Â»
/warn ~Â» [ reply ] to warn member ðŸ“
/unwarn ~Â» [ reply ] to delete warnings ï¸ ï¸
/silent ~Â» [ reply ] to mute member ðŸ¤
/unsilent ~Â» [ reply ] to raise mute for ðŸ˜¬ member ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"ðŸ”² Welcome ðŸ”³",'callback_data'=>"welc"]
					],
					[
	 	 			['text'=>"ðŸ“gp link ðŸ“",'callback_data'=>"gplink"]
		  			],
					[
						['text'=>"ðŸ—’ rules  ðŸ“œ",'callback_data'=>"rul"]
					],
         [
						['text'=>"â™£ï¸ settings warn â¬‡ï¸",'callback_data'=>"muner"]
					],
	 [
						['text'=>"âž–",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],	['text'=>"âž•",'callback_data'=>"+"]
					],
					 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"]
	  ]
      ]
    ])
  ]);
  }   
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}
  }
  elseif ($data == '#' )
{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"Ù‡Ø°Ø§ Ù‡Ùˆ Ø§Ù„Ø­Ø¯ Ø§Ù„Ø§Ù‚ØµÙ‰ Ù„Ø¹Ø¯Ø¯ Ø§Ù„ØªØ­Ø°ÙŠØ±Ø§Øª â™£ï¸",
]);
}   
 elseif ($data == 'muner' )
{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"Press
âž• To increase the warning
âž– To minimize the warning",
]);
}   
  
if( $lang12 == "english" ){
if($data == '+'){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        $newwarn = $warn_ + 1;
         $warn_1 = $warn_ + 1;
        file_put_contents("data/$cllchatid/warn/warn.txt", $newwarn);
	bot('editmessagetext',[
         'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  /kick [ id / reply ] to kick a member ðŸ‘ž
/ban ~Â» [ id / reply ] to ban member â›“
/unban [ id / reply ] to lift the ban âš–
/del ~Â» [ reply ] to clear message by reply ðŸ—‘
Â«~~~~~~~~~~~~~~Â»
/warn ~Â» [ reply ] to warn member ðŸ“
/unwarn ~Â» [ reply ] to delete warnings ï¸ ï¸
/silent ~Â» [ reply ] to mute member ðŸ¤
/unsilent ~Â» [ reply ] to raise mute for ðŸ˜¬ member ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
      [
						['text'=>"ðŸ”² Welcome ðŸ”³",'callback_data'=>"welc"]
					],
					[
	 	 			['text'=>"ðŸ“gp link ðŸ“",'callback_data'=>"gplink"]
		  			],
					[
						['text'=>"ðŸ—’ rules  ðŸ“œ",'callback_data'=>"rul"]
					],
        [
						['text'=>"â™£ï¸ settings warnâ¬‡ï¸",'callback_data'=>"muner"]
					],
	 [
						['text'=>"âž–",'callback_data'=>"-"],['text'=>"$warn_1",'callback_data'=>"#"],	['text'=>"âž•",'callback_data'=>"+"]
					],
					 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bag"]
	  ]
      ]
    ])
  ]);
  }   
  else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}
  }
if( $lang12 == "english" ){
 if($data == '-' ){
 if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
        $newwarn = $warn_ - 1;
        $warn_1 = $warn_ - 1;
        file_put_contents("data/$cllchatid/warn/warn.txt", $newwarn);
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  /kick [ id / reply ] to kick a member ðŸ‘ž
/ban ~Â» [ id / reply ] to ban member â›“
/unban [ id / reply ] to lift the ban âš–
/del ~Â» [ reply ] to clear message by reply ðŸ—‘
Â«~~~~~~~~~~~~~~Â»
/warn ~Â» [ reply ] to warn member ðŸ“
/unwarn ~Â» [ reply ] to delete warnings ï¸ ï¸
/silent ~Â» [ reply ] to mute member ðŸ¤
/unsilent ~Â» [ reply ] to raise mute for ðŸ˜¬ member ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
         [
			 			['text'=>"ðŸ”² Welcome ðŸ”³",'callback_data'=>"welc"]
  					],
  					[
	 	 			['text'=>"ðŸ“gp link ðŸ“",'callback_data'=>"gplink"]
		  			],
	   			[
						['text'=>"ðŸ—’ rules  ðŸ“œ",'callback_data'=>"rul"]
						],
        [
       	['text'=>"â™£ï¸ settings warn â¬‡ï¸",'callback_data'=>"muner"]
  					],
  	     [
	   			['text'=>"âž–",'callback_data'=>"-"],['text'=>"$warn_1",'callback_data'=>"#"],	['text'=>"âž•",'callback_data'=>"+"]
			  		],
         [
         ['text'=>"Back ðŸ”™",'callback_data'=>"bag"]
         ]
         ]
         ])
         ]);
         }   else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}
 } 
$warns = $warn - 1;  
if( $lang1 == "english" ){
if ($warns != $warn_2){ 
 if($re &&$text == "/warn"){  
 if($you == "creator" or $you == "administrator" or $from_id == $sudo  ){     
 $nnwarn = $warn_2 + 1;
        file_put_contents("data/$chat_id/warn/$re_id.txt", $nnwarn);
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"Sorry my friend ðŸ˜’âœ‹ðŸ»
Be aware of your actions within the group ðŸ‘¤
This is a warning by admin ðŸ‘¨â€ðŸ«
Number of your warnings ( $nnwarn | $warn )",
'reply_to_message_id'=>$re_msgid,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
	  ['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]
	  ]
      ]
    ])
  ]);
  }  
 }
 }
 }
 $warns = $warn - 1;   
if( $lang1 == "english" ){
 if ($warns == $warn_2){
if($re && $text == "/warn"){     
if($you == "creator" or $you == "administrator" or $from_id == $sudo  ){     
 file_put_contents("data/$chat_id/warn/$re_id.txt", "0");
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"Sorry my friend ðŸ’‚
You have not followed the rules in the set ðŸ¤·â€â™‚
You have reached the maximum of warnings and you have been kicked out ðŸ‘ž
Your warnings ( $warn | $warn )",
'reply_to_message_id'=>$re_msgid,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
	  ['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]
	  ]
      ]
    ])
  ]);
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
  }
  }
  }
    }
if( $lang1 == "english" ){
  if($re && $text == "/unwarn"){     
if($you == "creator" or $you == "administrator" or $from_id == $sudo  ){     
 file_put_contents("data/$chat_id/warn/$re_id.txt", "0");
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"What a good day  ðŸ™ˆ
all your warnings have been removed ðŸ˜‰ ",
                'reply_to_message_id'=>$re_msgid,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
	  ['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]
	  ]
      ]
    ])
  ]);
  } }  }
if( $lang12 == "english" ){
  if($data == "bagg"  ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  /kick [ id / reply ] to kick a member ðŸ‘ž
/ban ~Â» [ id / reply ] to ban member â›“
/unban [ id / reply ] to lift the ban âš–
/del ~Â» [ reply ] to clear message by reply ðŸ—‘
Â«~~~~~~~~~~~~~~Â»
/warn ~Â» [ reply ] to warn member ðŸ“
/unwarn ~Â» [ reply ] to delete warnings ï¸ ï¸
/silent ~Â» [ reply ] to mute member ðŸ¤
/unsilent ~Â» [ reply ] to raise mute for ðŸ˜¬ member ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"ðŸ”² Welcome ðŸ”³",'callback_data'=>"welc"]
		 			],
		 			[
						['text'=>"ðŸ“gp link ðŸ“",'callback_data'=>"gplink"]
		 			],
	 				[
		 			['text'=>"ðŸ—’ rules ðŸ“œ",'callback_data'=>"rul"]
	  			],
       [
  				['text'=>"â™£ï¸ settings warnâ¬‡ï¸",'callback_data'=>"muner"]
	  			],
	      [
			 		['text'=>"âž–",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],	['text'=>"âž•",'callback_data'=>"+"]
	 				],
					 [
     		['text'=>"Back ðŸ”™",'callback_data'=>"bag"]
	      ]
       ]
       ])
       ]);
       }   
       else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}
  
  }
if( $lang12 == "english" ){  
if($data == "welc"  ){
if($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo   ) {
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"This is a list of welcome settings ðŸ¤—
Press (â¬›ï¸Edit Welcomeâ¬œï¸) to edit the welcome for the groupðŸ˜ƒ",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"â¬›ï¸ Edit Welcome â¬œï¸",'callback_data'=>"welcom"]
					],
					 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}
  }
if( $lang12 == "english" ){
// by @wounds1 = mounir
if($data == "rul"  ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"Welcome to the list of Setting rules ðŸ‘
Press ï¸ðŸ‘‡ðŸ» ï¸ðŸ‘‡ðŸ»
( Edit rules ðŸ“¨ï¸)
To develop new rules for the group ðŸ–Š",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"Edit rules ðŸ“¨ï¸",'callback_data'=>"rules"]
					],
					 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}
  }
if( $lang12 == "english" ){
if($data == "gplink"  ){
if ($you_ == "creator" or $you_ == "administrator" or $cllfor == $sudo  ){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"Welcome to the group link list
Press ðŸ”ðŸ‘‡ðŸ»
(ðŸ“ Edit link ðŸ“)
To put a new link ðŸ“¨",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"ðŸ“Edit link gp  ðŸ“ï¸",'callback_data'=>"setlink"]
					],
					 [
		['text'=>"Back ðŸ”™",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"Sorry âš ï¸ this is for admin only ðŸ“›",
        'show_alert'=>true
        ]);
}
}
}
?>