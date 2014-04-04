function showWarning(id,message)
{
	selector = "#warning-" + id;
	messagebox = $(selector);
	item = $("<li>" + message + "</li>");
	$("ul li",messagebox).remove();
	$("ul",messagebox).append(item);
	$(messagebox).show();
}


$(function()
{
  $("input.hidden-tip").bind("focus",function()
  {
    that = this;
    tip = $(that).attr("hidden-tip");
    target_tip_selector = $(that).attr("target-tip-selector");
    old_tip = $(target_tip_selector).html();
    $(target_tip_selector).attr("old-tip",old_tip);
    $(target_tip_selector).html(tip);
  });
  $("input.hidden-tip").blur(function()
  {
    that = this;
    target_tip_selector = $(that).attr("target-tip-selector");
    old_tip = $(target_tip_selector).attr('old-tip');
    $(target_tip_selector).attr("old-tip",'');
    $(target_tip_selector).html(old_tip);
  });
});
