<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>VkWeb</title>
        <meta charset="utf-8">
		<link href="../style.css" rel="stylesheet" type="text/css">
  	</head>
	  <?php
			$oftenEmotions = [
				"Часто используемые","😆"
			];
			$allEmoji = [
				
					["Эмоции","😀", "😃", "😄", "😁", "😅", "😆", "😂", "🤣", "😉", "😊", "☺", "🙂", "🙃", "😇", "😗", "😙", "😚", "😘", "😍", "🥰", "🤩", "🤗", "😋", "😜", "🤪", "😛", "😝", "🤑", "🤭", "🤐", "🤫", "😶", "🤔", "🤨", "🧐", "😐", "😑", "🙄", "😬", "🤥", "😏", "😌", "🤤", "😴", "🤓", "😎", "🥳", "🤠", "😒", "😔", "😪", "😕", "😟", "🙁", "☹", "😮", "😯", "😲", "😳", "🥺", "😦", "😧", "😨", "😰", "😥", "😢", "😭", "😱", "😖", "😣", "😞", "😓", "😩", "😫", "😷", "🤒", "🤕", "🤢", "🤮", "🤧", "🥶", "🥵", "🥴", "😵", "🤯", "😤", "😠", "😡", "🤬", "😈", "👿", "💀", "☠", "💩", "🤡", "👹", "👺", "👻", "👽", "👾", "🤖", "😺", "😸", "😹", "😻", "😼", "😽", "🙀", "😿", "😾", "🙈", "🙉", "🙊", "🦠"],
				
					["Жесты и люди","👍", "👎", "👌", "✌", "🤞", "🤟", "🤘", "🤙", "🖕", "✊", "👊", "🤛", "🤜", "👈", "👉", "👆", "👇", "☝", "👋", "🤚", "🖐", "✋", "🖖", "👏", "🙌", "👐", "🤲", "🤝🏻", "🙏", "💪", "🦵", "🦶", "👂", "👃", "🧠", "🦷", "🦴", "👀", "👁", "👅", "👄", "✍", "💅", "🤳", "👫", "👭", "👬", "👩‍❤️‍💋‍👨", "👨‍❤️‍💋‍👨", "👩‍❤️‍💋‍👩", "👩‍❤️‍👨", "👨‍❤️‍👨", "👩‍❤️‍👩", "👪", "👶", "🧒", "👦", "👧", "🧑", "👱", "👨", "🧔", "👱‍♂️", "👨‍🦰", "👨‍🦱", "👨‍🦳", "👨‍🦲", "👩", "👱‍♀️", "👩‍🦰", "👩‍🦱", "👩‍🦳", "👩‍🦲", "🧓️", "👴️", "👵️", "🙍‍♂️️", "🙍‍♀️️", "🙎‍♂️", "🙎‍♀️️", "🙅‍♂️", "🙅‍♀️", "🙆‍♂️", "🙆‍♀️", "💁‍♂️", "💁‍♀️️", "🙋‍♂️", "🙋‍♀️️", "🙇‍♂️", "🙇‍♀️️", "🤦‍♂️", "🤦‍♀️", "🤷‍♂️", "🤷‍♀️", "💆‍♂️️", "💆‍♀️", "💇‍♂️️", "💇‍♀️", "🚶‍♂️️", "🚶‍♀️️", "🏃‍♂️️", "🏃‍♀️", "💃", "🕺", "🕴️", "👯‍♂️️", "👯‍♀️", "🧖‍♂️", "🧖‍♀️️", "👼", "🎅", "🤶", "🦸‍♂️", "🦸‍♀️", "🦹‍♂️", "🦹‍♀️", "🧙‍♂️", "🧙‍♀️", "🧚‍♂️", "🧚‍♀️", "🧛‍♂️", "🧛‍♀️", "🧜‍♂️", "🧜‍♀️", "🧝‍♂️", "🧝‍♀️", "🧞‍♂️", "🧞‍♀️", "🧟‍♂️", "🧟‍♀️", "👨‍⚕️", "👩‍⚕️", "👨‍🎓", "👩‍🎓", "👨‍🏫", "👩‍🏫", "👨‍⚖️", "👩‍⚖️", "👨‍🌾", "👩‍🌾", "👨‍🍳", "👩‍🍳", "👨‍🔧", "👩‍🔧", "👨‍🏭", "👩‍🏭", "👨‍💼", "👩‍💼", "👨‍🔬", "👩‍🔬", "👨‍💻", "👩‍💻", "👨‍🎤", "👩‍🎤", "👨‍🎨", "👩‍🎨", "👨‍✈️", "👩‍✈️", "👨‍🚀", "👩‍🚀", "👨‍🚒", "👩‍🚒", "👮‍♂️", "👮‍♀️", "🕵️‍♂️", "🕵️‍♀️", "💂‍♂️", "💂‍♀️", "👷‍♂️", "👷‍♀️", "🤴", "👸", "👳‍♂️", "👳‍♀️", "👲", "🧕", "🤵", "👰", "🤰", "🤱", "🛀", "🛌"],
			
					["Символы","💋", "❤", "💔", "❣", "💘", "💝", "💖", "💗", "💓", "💞", "💕", "💟", "💜", "🧡", "💛", "💚", "💙", "🖤", "💯", "💢", "💥", "💫", "🕳", "💣", "💬", "👁️‍🗨️", "🗨", "🗯", "💭", "💤", "🗣", "👤", "👥", "👣", "🔇", "🔊", "📢", "📣", "🔔", "🔕", "🎼", "🎵", "🎶", "⚠", "🚸", "☢", "☣", "🆚", "🆓", "🆕", "🚮", "🚾", "🚭", "✅", "♻", "⚕", "🔱", "‼", "⁉", "❓", "❗", "🆘", "⛔", "🚫", "🚳", "🚯", "🚱", "🚷", "📵", "🔞"],
				
					 ["Животные и растения","🐵", "🐒", "🦍", "🐶", "🐕", "🐩", "🐺", "🦊", "🦝", "🐱", "🐈", "🦁", "🐯", "🐅", "🐆", "🐴", "🐎", "🦄", "🦓", "🦌", "🐮", "🐂", "🐃", "🐄", "🐷", "🐽", "🐖", "🐗", "🐏", "🐑", "🐐", "🐪", "🐫", "🦙", "🦒", "🐘", "🦏", "🦛", "🐭", "🐁", "🐀", "🐹", "🐰", "🐇", "🐿", "🦔", "🦇", "🐻", "🐨", "🐼", "🦘", "🦡", "🐾", "🦃", "🐔", "🐓", "🐣", "🐤", "🐥", "🐦", "🐧", "🕊", "🦅", "🦆", "🦢", "🦉", "🦚", "🦜", "🐸", "🐊", "🐢", "🦎", "🐍", "🐲", "🐉", "🦕", "🦖", "🐳", "🐋", "🐬", "🐟", "🐠", "🐡", "🦈", "🐙", "🦀", "🦞", "🦐", "🦑", "🐚", "🐌", "🦋", "🐛", "🐜", "🐝", "🐞", "🦗", "🕷", "🕸", "🦂", "🦟", "💐", "🌸", "💮", "🏵", "🌹", "🥀", "🌺", "🌻", "🌼", "🌷", "🌳", "🌲", "🎄", "🌴", "🌵", "🌾", "🌱", "🌿", "☘", "🍀", "🍁", "🍂", "🍃", "🌑", "🌒", "🌓", "🌔", "🌕", "🌖", "🌗", "🌘", "🌙", "🌚", "🌛", "🌜", "🌡", "☀", "🌝", "🌞", "⭐", "🌟", "🌠", "☁", "⛅", "⛈", "🌤", "🌥", "🌦", "🌧", "🌨", "🌩", "🌪", "🌫", "🌬", "💨", "🌀", "🌈", "🌂", "☂", "☔", "⛱", "⚡", "❄", "☃", "⛄", "☄", "🔥", "💦", "💧", "🌊"],
			
					["Еда и напитки","🍏", "🍎", "🍐", "🍅", "🥝", "🍑", "🍒", "🍓", "🍇", "🍈", "🍉", "🍊", "🍋", "🍌", "🍍", "🥭", "🥥", "🥑", "🍆", "🥔", "🥕", "🌽", "🌶", "🥒", "🥬", "🥦", "🍄", "🥜", "🌰", "🍞", "🥐", "🥖", "🥨", "🥯", "🥞", "🧀", "🍖", "🍗", "🥩", "🥓", "🍔", "🍟", "🍕", "🌭", "🥪", "🌮", "🌯", "🥙", "🥚", "🍳", "🥘", "🍲", "🥣", "🥗", "🍿", "🧂", "🥫", "🍱", "🍘", "🍙", "🍚", "🍛", "🍜", "🍝", "🍠", "🍢", "🍣", "🍤", "🍥", "🥮", "🍡", "🥟", "🥠", "🥡", "🍦", "🍧", "🍨", "🍩", "🍪", "🎂", "🍰", "🧁", "🥧", "🍫", "🍬", "🍭", "🍮", "🍯", "🍼", "🥛", "☕", "🍵", "🍶", "🍾", "🍷", "🍸", "🍹", "🍺", "🍻", "🥂", "🥃", "🥤", "🥢", "🍽", "🍴", "🥄"],
				
					 ["Спорт и активности","⚽", "⚾", "🥎", "🏀", "🏐", "🏈", "🏉", "🎾", "🥏", "🎳", "🏏", "🏑", "🏒", "🥍", "🏓", "🏸", "🥊", "🥋", "🥅", "⛳", "⛸", "🎣", "🎽", "🛹", "🎿", "🛷", "🥌", "🎯", "🎱", "🎮", "🕹", "🎰", "🎲", "🧩", "♟", "🧗‍♂️️", "🧗‍♀️", "🤺", "🏇", "⛷", "🏂", "🏌️‍♂️", "🏌️‍♀️", "🏄‍♂️", "🏄‍♀️", "🚣‍♂️", "🚣‍♀️", "🏊‍♂️", "🏊‍♀️", "⛹️‍♂️", "⛹️‍♀️", "🏋️‍♂️", "🏋️‍♀️", "🚴‍♂️", "🚴‍♀️", "🚵‍♂️", "🚵‍♀️", "🤸", "🤼‍♂️", "🤼‍♀️", "🤽‍♂️", "🤽‍♀️", "🤾‍♂️", "🤾‍♀️", "🤹‍♂️", "🤹‍♀️", "🧘‍♂️", "🧘‍♀️", "🎖", "🏆", "🏅", "🥇", "🥈", "🥉"],
				
					["Путешествия и транспорт","🚂", "🚃", "🚄", "🚅", "🚆", "🚇", "🚈", "🚉", "🚊", "🚝", "🚞", "🚋", "🚌", "🚍", "🚎", "🚐", "🚑", "🚒", "🚓", "🚔", "🚕", "🚖", "🚗", "🚘", "🚙", "🚚", "🚛", "🚜", "🏎", "🏍", "🛵", "🚲", "🛴", "🚏", "🛣", "🛤", "🛢", "⛽", "🚨", "🚥", "🚦", "🛑", "🚧", "⚓", "⛵", "🛶", "🚤", "🛳", "⛴", "🛥", "🚢", "✈", "🛩", "🛫", "🛬", "💺", "🚁", "🚟", "🚠", "🚡", "🛰", "🚀", "🛸", "🌍", "🌎", "🌏", "🌐", "🗺", "🗾", "🧭", "🏔", "⛰", "🌋", "🗻", "🏕", "🏖", "🏜", "🏝", "🏞", "🏟", "🏛", "🏗", "🧱", "🏘", "🏚", "🏠", "🏡", "🏢", "🏣", "🏤", "🏥", "🏦", "🏨", "🏩", "🏪", "🏫", "🏬", "🏭", "🏯", "🏰", "💒", "🗼", "🗽", "⛪", "🕌", "🕍", "⛩", "🕋", "⛲", "⛺", "🌁", "🌃", "🏙", "🌄", "🌅", "🌆", "🌇", "🌉", "♨", "🌌", "🎠", "🎡", "🎢", "💈", "🎪"],
			
					["Предметы","🎙", "🎚", "🎛", "🎤", "🎧", "📻", "🎷", "🎸", "🎹", "🎺", "🎻", "🥁", "📯", "🎭", "🖼", "🎨", "🧵", "🧶", "🔮", "🧿", "🧸", "🃏", "🀄", "🎴", "🎃", "🎆", "🎇", "🧨", "✨", "🎈", "🎉", "🎊", "🎋", "🎍", "🎎", "🎏", "🎐", "🎑", "🧧", "🎀", "🎁", "🎗", "🎟", "🎫", "🛎", "🧳", "⌛", "⏳", "⌚", "⏰", "⏱", "⏲", "🕰", "👓", "🕶", "🥽", "🥼", "👔", "👕", "👖", "🧣", "🧤", "🧥", "🧦", "👗", "👘", "👙", "👚", "👛", "👜", "👝", "🛍", "🎒", "👞", "👟", "🥾", "🥿", "👠", "👡", "👢", "👑", "👒", "🎩", "🎓", "🧢", "⛑", "📿", "💄", "💍", "💎", "📱", "📲", "☎", "📞", "📟", "📠", "🔋", "🔌", "💻", "🖥", "🖨", "⌨", "🖱", "🖲", "💽", "💾", "💿", "📀", "🧮", "🎥", "🎞", "📽", "🎬", "📺", "📷", "📸", "📹", "📼", "🔍", "🔎", "🕯", "💡", "🔦", "🏮", "📔", "📕", "📖", "📗", "📘", "📙", "📚", "📓", "📒", "📃", "📜", "📄", "📰", "🗞", "📑", "🔖", "🏷", "💰", "💴", "💵", "💶", "💷", "💸", "💳", "🧾", "💹", "💱", "💲", "✉", "💌", "📧", "📨", "📩", "📤", "📥", "📦", "📫", "📪", "📬", "📭", "📮", "🗳", "✏", "✒", "🖋", "🖊", "🖌", "🖍", "📝", "💼", "📁", "📂", "🗂", "📅", "📆", "🗒", "🗓", "📇", "📈", "📉", "📊", "📋", "📌", "📍", "📎", "🖇", "📏", "📐", "✂", "🗃", "🗄", "🗑", "🔒", "🔓", "🔏", "🔐", "🔑", "🗝", "🔨", "⛏", "⚒", "🛠", "🗡", "⚔", "🔪", "🔫", "🏹", "🛡", "🔧", "🔩", "⚙", "🗜", "⚖", "🔗", "⛓", "🧰", "🧲", "⚗", "🧪", "🧫", "🧬", "🔬", "🔭", "📡", "💉", "💊", "🚪", "🛏", "🛋", "🚽", "🚿", "🛁", "🧴", "🧷", "🧹", "🧺", "🧻", "🧼", "🧽", "🧯", "🛒", "🚬", "⚰", "⚱", "🏺", "🗿"],
				
					["Флаги","🇷🇺", "🇰🇿", "🇧🇾", "🇺🇦", "🇲🇳", "🇬🇪", "🇦🇿", "🇹🇯", "🇧🇷", "🇱🇹", "🇱🇻", "🇪🇪", "🇦🇲", "🏁", "🚩", "🎌", "🏴", "🏳", "🏳️‍🌈", "🏴‍☠️", "🇦🇨", "🇦🇩", "🇦🇪", "🇦🇫", "🇦🇬", "🇦🇮", "🇦🇱", "🇦🇴", "🇦🇶", "🇦🇷", "🇦🇸", "🇦🇹", "🇦🇺", "🇦🇼", "🇦🇽", "🇧🇦", "🇧🇧", "🇧🇩", "🇧🇪", "🇧🇫", "🇧🇬", "🇧🇭", "🇧🇮", "🇧🇯", "🇧🇱", "🇧🇲", "🇧🇳", "🇧🇴", "🇧🇶", "🇧🇸", "🇧🇹", "🇧🇻", "🇧🇼", "🇧🇿", "🇨🇦", "🇨🇨", "🇨🇩", "🇨🇫", "🇨🇬", "🇨🇭", "🇨🇮", "🇨🇰", "🇨🇱", "🇨🇲", "🇨🇳", "🇨🇴", "🇨🇵", "🇨🇷", "🇨🇺", "🇨🇻", "🇨🇼", "🇨🇽", "🇨🇾", "🇨🇿", "🇩🇪", "🇩🇬", "🇩🇯", "🇩🇰", "🇩🇲", "🇩🇴", "🇩🇿", "🇪🇨", "🇪🇬", "🇪🇭", "🇪🇷", "🇪🇸", "🇪🇹", "🇪🇺", "🇫🇮", "🇫🇯", "🇫🇰", "🇫🇲", "🇫🇴", "🇫🇷", "🇬🇦", "🇬🇧", "🇬🇩", "🇬🇫", "🇬🇬", "🇬🇭", "🇬🇮", "🇬🇱", "🇬🇲", "🇬🇳", "🇬🇵", "🇬🇶", "🇬🇷", "🇬🇸", "🇬🇹", "🇬🇺", "🇬🇼", "🇬🇾", "🇭🇰", "🇭🇲", "🇭🇳", "🇭🇷", "🇭🇹", "🇭🇺", "🇮🇨", "🇮🇩", "🇮🇪", "🇮🇱", "🇮🇲", "🇮🇳", "🇮🇴", "🇮🇶", "🇮🇷", "🇮🇸", "🇮🇹", "🇯🇪", "🇯🇲", "🇯🇴", "🇯🇵", "🇰🇪", "🇰🇬", "🇰🇭", "🇰🇮", "🇰🇲", "🇰🇳", "🇰🇵", "🇰🇷", "🇰🇼", "🇰🇾", "🇱🇦", "🇱🇧", "🇱🇨", "🇱🇮", "🇱🇰", "🇱🇷", "🇱🇸", "🇱🇺", "🇱🇾", "🇲🇦", "🇲🇨", "🇲🇩", "🇲🇪", "🇲🇫", "🇲🇬", "🇲🇭", "🇲🇰", "🇲🇱", "🇲🇲", "🇲🇴", "🇲🇵", "🇲🇶", "🇲🇷", "🇲🇸", "🇲🇹", "🇲🇺", "🇲🇻", "🇲🇼", "🇲🇽", "🇲🇾", "🇲🇿", "🇳🇦", "🇳🇨", "🇳🇪", "🇳🇫", "🇳🇬", "🇳🇮", "🇳🇱", "🇳🇴", "🇳🇵", "🇳🇷", "🇳🇺", "🇳🇿", "🇴🇲", "🇵🇦", "🇵🇪", "🇵🇫", "🇵🇬", "🇵🇭", "🇵🇰", "🇵🇱", "🇵🇲", "🇵🇳", "🇵🇷", "🇵🇸", "🇵🇹", "🇵🇼", "🇵🇾", "🇶🇦", "🇷🇪", "🇷🇴", "🇷🇸", "🇷🇼", "🇸🇦", "🇸🇧", "🇸🇨", "🇸🇩", "🇸🇪", "🇸🇬", "🇸🇭", "🇸🇮", "🇸🇯", "🇸🇰", "🇸🇱", "🇸🇲", "🇸🇳", "🇸🇴", "🇸🇷", "🇸🇸", "🇸🇹", "🇸🇻", "🇸🇽", "🇸🇾", "🇸🇿", "🇹🇦", "🇹🇨", "🇹🇩", "🇹🇫", "🇹🇬", "🇹🇭", "🇹🇰", "🇹🇱", "🇹🇲", "🇹🇳", "🇹🇴", "🇹🇷", "🇹🇹", "🇹🇻", "🇹🇼", "🇹🇿", "🇺🇬", "🇺🇲", "🇺🇳", "🇺🇸", "🇺🇾", "🇺🇿", "🇻🇦", "🇻🇨", "🇻🇪", "🇻🇬", "🇻🇮", "🇻🇳", "🇻🇺", "🇼🇫", "🇼🇸", "🇽🇰", "🇾🇪", "🇾🇹", "🇿🇦", "🇿🇲", "🇿🇼"]
				
			]
	  ?>
    <body>  
		<div class = "messagePlaceHolder">	
			<div class = "messageBackground" id="msgBg">
				<textarea id="textarea" class="message" placeholder = "Ваше сообщение..." onkeypress ="msgHeight()"></textarea>
				<a id="emojiBtn" onmousedown="SmiOpen()" onmouseup='EmojiOpen()'>
					<div class="emojiBtnOutline">
						<div class="source">
							<img src="sm.ico" width=24px alt="">
						</div>
					</div>
				</a>	
			</div>	
		</div>
		<div id="stickersKeyboard" style="display:none;">
			<div class = "stickersBackground">
				<div class="stickersBackgroundRectangle">
					<div class="emojiConteiner" id = "emojiBlock">
						<div class='stickerArea'>
							<?php
							foreach($allEmoji as $emoji){
								foreach ($emoji as $element) {
									if($element!="Эмоции" && $element!="Жесты и люди" && $element!="Символы" && $element!= "Животные и растения" && $element!= "Еда и напитки"&& $element!= "Спорт и активности" && $element!= "Путешествия и транспорт" && $element!= "Предметы" && $element!="Флаги")
									{
										echo"<a class='stickerBtn' onmousedown='PasteEmoj(\"$element\")' onmouseup='msgHeight()'><p>$element</p></a>";
									}
									else{
										echo"<h6>$element</h6>";
									}
								}}
							?>
						</div>
					</div>
					<div class="emojiConteiner" id = "oftenEmojiBlock" style="display: none;">
						<div class='stickerArea'>
							<?php
								foreach ($oftenEmotions as $a) {
									if($a!="Часто используемые")
									{
										echo"<a class='stickerBtn' onmousedown='PasteEmoj(\"$a\")' onmouseup='msgHeight()'><p>$a</p></a>";
										echo $_COOKIE['Smile'];
									}
									else{
										echo"<h6>$a</h6>";
									}
								}
							?>
						</div>
					</div>
					<div class="emojiBottomBar">
						<div id = "EmojiBtn" class="emojiBottomBarBtn">
							<a class="emojiBottomBarBtn" onmousedown='EmojiOpen()' id = "oftenEmojiBlock">
								<img src="sm.ico" style="padding: 8.1px;" width=20px alt="">
							</a>
						</div>	
						<div id = "oftenEmojiBtn" class="emojiBottomBarBtn">
							<a class="emojiBottomBarBtn" onmousedown='OftenEmojiOpen()' >
								<img  src="clock.png" width=20px style="padding: 8.1px;" alt="">
							</a>
						</div>	
					</div>
				</div>
				<div class="stickersBackgroundPath3">
				</div>
			</div>
		</div>
    </body>
</html>

<script>
	var isOpen = false;
	var mesgBg = document.getElementById("msgBg")
	var content = document.getElementById("stickersKeyboard")
	function SmiOpen() {
		isOpen = !isOpen
		if(isOpen)
		{
			content.style.display = "block"
		}
		else
		{
			content.style.display = "none"
		}
	};
	function msgHeight(){
		var content = document.getElementById("textarea");
		var dif = content.scrollHeight - content.clientHeight;
		if(content.style.height <"75px")
		{
			if (isNaN(parseInt(content.style.height)))
			{
				content.style.height = content.scrollHeight + "px";
				mesgBg.style.height = content.style.height + 14 + "px";
			}
			else
			{
				content.style.height = parseInt(content.style.height) + dif + "px";
				mesgBg.style.height = parseInt(content.style.height) + 14 + dif + "px";
				
			}
		}
	}
</script>
<script>

	var isOpenOftenEmoji;
	var emojiBlock = document.getElementById("emojiBlock");
	var oftenEmojiBlock = document.getElementById("oftenEmojiBlock");
	var oftenEmojiBtn = document.getElementById("oftenEmojiBtn");
	var EmojiBtn = document.getElementById("EmojiBtn");
	function EmojiOpen() {
		oftenEmojiBtn.style.background= "#EBEEF2";
		EmojiBtn.style.background= "#FFFFFF";
		oftenEmojiBlock.style.display = "none";
		emojiBlock.style.display = "block";
	};
	function OftenEmojiOpen() {
		oftenEmojiBtn.style.background= "#FFFFFF";
		EmojiBtn.style.background= "#EBEEF2";
		oftenEmojiBlock.style.display = "block";
		emojiBlock.style.display = "none";
	};
</script>
<script>
	function PasteEmoj($emoj) {
		document.getElementById('textarea').value += $emoj;
	};
</script>
