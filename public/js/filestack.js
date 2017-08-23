const link = document.getElementById('url');
const client = filestack.init('A4e3fBA8JTkOq2h4hG7NDz');


client.pick({
	accept: 'image/*',
}).then(function (result) {
	const fileUrl = result.filesUploaded[0].url;
	link.href = fileUrl;
	link.innerHTML = fileUrl;
});
