function showWarning(id,message)
{
	selector = "#warning-" + id;
	messagebox = $(selector);
	item = $("<li>" + message + "</li>");
	$("ul li",messagebox).remove();
	$("ul",messagebox).append(item);
	$(messagebox).show();
}
