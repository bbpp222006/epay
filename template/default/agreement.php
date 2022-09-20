﻿<?php
if(!defined('IN_CRONLITE'))exit();
require INDEX_ROOT.'head.php';
?>
<style type="text/css">
body{color:#000;}header { position: relative; }
.bann{ content:'';background-size:100%;background:#4280cb;background:-webkit-gradient(linear,0 0,0 100%,from(#4585d2),to(#4280cb));background:-moz-linear-gradient(top,#4585d2,#4280cb);background:linear-gradient(to bottom,#4585d2,#4280cb);top:0;left:0;z-index:-1;min-height:50px;width:100%}.fl .active{ color:#3F5061;background:#fff;border-color:#fff}
p {
    margin: 0 0 10px 0;
    font-size: 15px;
}
h4 {
    font-size: 20px;
    line-height: 30px;
}
</style>

<div class="bann">


<div class="col-xs-12"style="text-align:center;">
<div class="h3" style="color:#fff;margin-top: 35px;margin-bottom: 30px;">服务条款</div>
<div class="text-muted" style="color:#ddd;margin-top: 35px;margin-bottom: 30px;">请使用本支付系统前，先认真阅读商户服务条款，<?php echo $conf['sitename']?>系统有权力随时更新条款，请您严格遵守我们服务条款内的条约，注册商户后则默认代表您已同意我们的服务条款。</div>
<div style="clear:both;"></div>
</div><div style="clear:both;"></div>
</div>


<div class="container">

  <!-- Docs nav
  ================================================== -->
  <div class="row">

    <div class="col-md-12">
      <article class="post page">
      	<section class="post-content">
		<p>
		<h4>特别提示：</h4><p style="word-break:break-all"><strong>本协议由<?php echo $conf['sitename']?>系统和你共同签订，具有合同法律效力。</strong></p><p><strong>请你务必审慎阅读并充分理解各条款内容，特别是免除或者限制责任的条款、争议解决和法律适用条款。免除或者限制责任的条款可能以加粗字体显示，你应重点阅读。除非你已阅读并接受本协议所有条款，否则你无权使用本服务。你使用本服务即视为你已阅读并同意本协议的约束。如你对本协议有任何疑问的，应向客服咨询。</strong></p><h4>一、定义</h4><p>如无特别说明，下列术语在本协议中的定义为：</p><p><strong>1.1商户号：</strong>指你凭以登录，操作商户平台的账号，你成功申请商户号后，<?php echo $conf['sitename']?>系统将向你在本协议中载明的联系邮箱发送电子邮件，告知你的商户平台登录账号及初始密码，你可在商户平台中修改该初始密码，你亦可根据需要在商户平台中为该登录账号设置对应的商户密钥，用来查询和操作<?php echo $conf['sitename']?>系统商户号。</p><p><strong>1.2商户密钥：</strong>指你凭以登录，操作商户平台的账号密码，你成功申请商户号后，<?php echo $conf['sitename']?>系统将向你在本协议中载明的联系邮箱发送电子邮件，告知你的商户平台登录账号及初始密码，你可在商户平台中修改该初始密码，你亦可根据需要在商户平台中为该登录账号设置对应的商户密钥，用来查询和操作<?php echo $conf['sitename']?>系统商户号。</p><p><strong>1.3结算：</strong>指用户购买你的商品或服务后，<?php echo $conf['sitename']?>系统在一定周期内将交易资金记账至你的<?php echo $conf['sitename']?>系统商户号，并根据协议约定和你设置提现至你银行账户的行为。</p><p><strong>1.4提现：</strong><?php echo $conf['sitename']?>系统根据你指令或协议约定，在一定周期内向备付金存款银行发出转账指令，要求备付金存款银行将相应资金转账至你指定的合法收款账户的行为。</p><h4>二、服务内容</h4><p><strong>2.1本服务的场景和功能。</strong><?php echo $conf['sitename']?>系统为你提供货币资金转移服务，当用户购买你的商品或服务时，可通过本服务完成交易。本服务的具体运用包括WAP支付，H5支付等</p><p><strong>2.2服务限制。本服务仅能用于你在商户平台申报并经核准的商品或服务，且每笔订单不能超过<?php echo $conf['sitename']?>系统规定的限额。你了解并同意<?php echo $conf['sitename']?>系统有权根据你经营的商品或服务类型，以及你经营活动的风险状况调整你的交易额度。</strong></p><h4>三、<?php echo $conf['sitename']?>系统的权利和义务</h4><p><strong>3.1支付系统建设。</strong><?php echo $conf['sitename']?>系统负责支付系统的建设、运行和管理，并确保该系统的安全性。</p><p><strong>3.2交易查询。</strong><?php echo $conf['sitename']?>系统设立网上交易查询系统及查询接口，为你提供商户信息管理和交易信息查询服务。</p><p><strong>3.3支付指令校验。</strong><?php echo $conf['sitename']?>系统依据你的商户平台登录账号、登录密码来校验你支付指令的真实性、有效性。当你的商户平台登录账号和登录密码均校验通过时，即视为系你本人操作<?php echo $conf['sitename']?>系统商户号，<?php echo $conf['sitename']?>系统无需校验其他信息即可执行支付指令。</p><p><strong>3.4交易纠纷处理。<?php echo $conf['sitename']?>系统仅为你提供货币资金转移服务，你与用户或其他主体之间的纠纷由你自行负责处理，与<?php echo $conf['sitename']?>系统无关，但是，因<?php echo $conf['sitename']?>系统系统故障引起的资金转移服务纠纷除外。</strong></p><p><strong>3.5商户经营审核。<?php echo $conf['sitename']?>系统有权定期或不定期审核你的业务类型，以及通过本服务售卖的物品和服务，若你违反本协议第2.2条约定或从事不符合国家相关法律法规规定的经营活动时，<?php echo $conf['sitename']?>系统有权暂停或终止提供服务。</strong></p><p><strong>3.6交易停滞。你自开户之日起6个月内无交易记录，或连续180个自然日未利用本服务产生交易额的，<?php echo $conf['sitename']?>系统有权暂停服务并要求你重新核实身份，你不予配合或身份核实未通过的，<?php echo $conf['sitename']?>系统有权终止本协议且无需承担任何法律责任。如果你的受理终端或收款码连续3个月内未发生交易，<?php echo $conf['sitename']?>系统有权暂停服务并要求你重新核实身份，你不予配合或身份核实未通过的，<?php echo $conf['sitename']?>系统有权停止为你提供收款服务。如果你的受理终端或收款码连续12个月内未发生交易的，<?php echo $conf['sitename']?>系统有权停止为你提供收款服务。</strong></p><p><strong>3.7延迟结算。</strong><?php echo $conf['sitename']?>系统发现你可能存在洗钱、恐怖融资、欺诈交易、信用卡套现、恶意倒闭或其他违法违规行为，或<?php echo $conf['sitename']?>系统发现你存在集中转入分散转出等可疑交易特征的交易或存在争议交易时，<?php echo $conf['sitename']?>系统可以对你<?php echo $conf['sitename']?>系统商户号中的相应资金进行延迟结算，已经结算的，<?php echo $conf['sitename']?>系统可以延迟转账到你指定银行帐户和支付帐户。对于延迟结算、延迟转账的资金，直至排除违法违规嫌疑时，<?php echo $conf['sitename']?>系统才恢复该部分资金的结算和转账。你的行为导致<?php echo $conf['sitename']?>系统遭受损失的，你还应当承担赔偿责任。</p><p><strong>3.8身份验证和授权。</strong>你使用本服务，即表明你同意<?php echo $conf['sitename']?>系统收集、记录和使用你使用本服务过程中产生的相关信息和数据，包括但不限于你及其法定代表人、负责人的身份信息、账户信息和交易信息等，并将前述信息提交国家机关、金融机构和其他企事业单位进行身份验证和鉴权。<?php echo $conf['sitename']?>系统有权根据需要收集、保存、核实你法定代表人、负责人的音频和视频资料。为更好地提供服务，<?php echo $conf['sitename']?>系统及关联公司有权在法律允许的范围内自行收集、记录、使用上述信息和数据。</p><p><strong>3.9<?php echo $conf['sitename']?>系统有权对你的业务进行风险管理，持续监测和分析交易金额、笔数、类型、时间、频率和收款方、付款方等特征，完善可疑交易监测模型。如<?php echo $conf['sitename']?>系统发现交易金额、时间、频率与特约商户经营范围、规模不相符等异常情形的，有权对你采取延迟资金结算、设置收款限额、暂停银行卡交易、暂停使用权限等措施。</strong></p><h4>四、你的权利和义务</h4><p><strong>4.1账号开立和身份验证。</strong>你在申请开立<?php echo $conf['sitename']?>系统商户号时，应向<?php echo $conf['sitename']?>系统如实提供相关的个人信息。你应保证所提交的上述资料的准确性、真实性、完整性。你上述信息发生变更，或你迁址、停业、变更域名或联系电话等资料信息，应提前通知<?php echo $conf['sitename']?>系统，否则，<?php echo $conf['sitename']?>系统有权视具体情况暂停服务，你未及时通知导致的一切投诉和纠纷，均由你承担。<?php echo $conf['sitename']?>系统有权根据国家法律法规、规章制度、行业规范、政策要求的规定，要求你补充提交相关信息和资料，你逾期未提交或未通过<?php echo $conf['sitename']?>系统核验的，<?php echo $conf['sitename']?>系统有权解除本协议或暂停你<?php echo $conf['sitename']?>系统商户号的全部或部分功能。</p><p><strong>4.2账号使用。你不得把<?php echo $conf['sitename']?>系统商户号、<?php echo $conf['sitename']?>系统提供的技术接口、安全协议及证书用于本协议范围以外的用途，也不得出租、转让给第三方使用。你不得将其他商户的交易假冒成自己的交易与<?php echo $conf['sitename']?>系统结算。你应充分了解并清楚知晓出租、出借、出售、购买账号的相关法律责任和惩戒措施，承诺依法依规开立和使用你的账号。</strong></p><p><strong>4.3禁止存储用户敏感信息。你不得存储用户银行账户密码、银行卡的磁道信息或芯片信息、银行卡验证码和有效期等敏感信息，不得泄露用户信用卡信息和借记卡信息等。</strong></p><p><strong>4.4账号保管和挂失。你应妥善保管<?php echo $conf['sitename']?>系统商户号及其密码，以及手机短信验证码、API Key等。<?php echo $conf['sitename']?>系统商户号下的一切行为均视为你的行为。若你需对<?php echo $conf['sitename']?>系统商户号挂失，应及时与客服人员联系并按照客服人员的指引进行操作，若客服人员要求你提供书面证明材料才能进行下一步挂失操作的，你应及时提交书面证明材料。若你发现<?php echo $conf['sitename']?>系统商户号被盗用，应立即向<?php echo $conf['sitename']?>系统发起挂失。因你管理不善导致<?php echo $conf['sitename']?>系统商户号被盗用的，一切损失由你自行承担。</strong></p><p><strong>4.5止付和撤销。由于<?php echo $conf['sitename']?>系统系统的实时性和不可更改性，你向<?php echo $conf['sitename']?>系统发起的任何支付指令，在<?php echo $conf['sitename']?>系统执行后，均为不可撤销或更改的。支付指令一旦被<?php echo $conf['sitename']?>系统执行，你不得要求止付、更改或撤销。</strong></p><p><strong>4.6规范使用。</strong>未经<?php echo $conf['sitename']?>系统书面授权，你不得转载、复制、截取、篡改<?php echo $conf['sitename']?>系统的商标、标识、Logo等内容或制作与该内容有关的衍生产品。未经<?php echo $conf['sitename']?>系统另行书面授权，除了在商户中心登记的域名外，你不得在任何网页或APP页面展示与<?php echo $conf['sitename']?>系统有关的链接、弹窗或与H5支付有关的内容及其衍生产品。</p><p><strong>4.7商户系统安全与维护。</strong>你应负责自身的硬件平台搭建并承担相关的设备费用及通讯费用。你应严格按照本服务和商户平台的接入技术规范来建设和运行自己的计算机系统并确保自身系统的安全性。你应在<?php echo $conf['sitename']?>系统交易过程中验证<?php echo $conf['sitename']?>系统请求和响应数据包中的签名真实性，并保障支付信息数据传输过程中的安全性、保密性。你应向<?php echo $conf['sitename']?>系统明确各方数据传输协议、安全机制、硬件需求以及物理连接等诸多技术细节的具体需求，并妥善处理<?php echo $conf['sitename']?>系统反馈的各种交易异常情况。</p><p><strong>4.8真实交易背景。</strong>你承诺发起的本服务交易基于真实的交易，不得利用本服务从事虚假交易。</p><p><strong>4.9保存订单信息。</strong>你应保证订单信息的合法性、真实性、准确性和完整性。你在受理用户订单时，须记录包括但不限于以下信息：用户姓名、手机号码，订购产品的产品名称、产品编号、产品单价、合计索取价格、配送信息。你应按<?php echo $conf['sitename']?>系统的要求向<?php echo $conf['sitename']?>系统提供详细的、真实可信的交易字段，包括但不限于订单号、商品名称、商品描述等。你还应妥善保留有关交易数据和凭证，包括但不限于订单和用户接受货物时签字的有关单据，由交易发生之日起或本协议终止之日起，至少保留三年。在协议有效期内和协议终止之日起三年内，对<?php echo $conf['sitename']?>系统提出的查询通知及调单要求，你应在接到<?php echo $conf['sitename']?>系统通知后，以信件或传真的方式在两个工作日内将相关单据交付给<?php echo $conf['sitename']?>系统。</p><p><strong>4.10第三方网络交易平台。若你经营第三方网络交易平台，不得利用本服务从事非法支付结算业务，并应配备相应的系统、人员和完善的制度。你应当识别二级商户的身份信息和经营资质，并收集、保存二级商户的营业执照、税务登记证、组织机构代码证、法定代表人身份证明等，若二级商户从事国家规定专营、专控或需要取得国家前置行政许可的经营活动，还应提供该相关资质证照。你应保证二级商户所提交的上述资料的准确性、真实性、完整性。同时，你还应收集、保存并向<?php echo $conf['sitename']?>系统传输二级商户的交易订单信息，包括但不限于：用户姓名、手机号码，订购产品的产品名称、产品编号、产品单价、合计索取价格、配送信息。你还应妥善保留二级商户的交易数据和凭证，包括但不限于订单和用户接受货物时签字的有关单据，由交易发生之日起或本协议终止之日起，至少保留五年。在协议有效期和协议终止之日起五年内，对<?php echo $conf['sitename']?>系统提出的查询通知及调单要求，你应在接到<?php echo $conf['sitename']?>系统通知后，以信件或传真的方式在两个工作日内将相关单据回复给<?php echo $conf['sitename']?>系统。对<?php echo $conf['sitename']?>系统提出的风险交易，你应按<?php echo $conf['sitename']?>系统要求对其二级商户交易进行有效识别、追溯及在必要时实施暂停业务管理的措施，同时承担因二级商户发展和管理不善造成的全部风险损失，你应保证二级商户不再发展下一级商户。</strong></p><p><strong>第三方网络交易平台，指在网络商品交易活动中为交易双方或者多方提供网页空间、虚拟经营场所、交易规则、交易撮合、信息发布等服务，供交易双方或者多方独立开展交易活动的信息网络系统。</strong></p><p><strong>二级商户，指在你经营的第三方网络交易平台中销售商品或服务的自然人或企事业单位。</strong></p><p><strong>4.11第三方网络交易平台的风险防范。若你经营第三方网络交易平台，则你需对二级商户的交易行为的真实性、合法性进行监控和管理，你应防止二级商户利用<?php echo $conf['sitename']?>系统从事信用卡套现、洗钱、虚假交易等违法违规活动。若出现二级商户利用<?php echo $conf['sitename']?>系统从事信用卡套现、洗钱、虚假交易等违法违规活动的，则<?php echo $conf['sitename']?>系统有权解除本协议，并追究你的违约责任。</strong></p><p><strong>4.12反套现、反洗钱。你不得主动或协助持卡人进行信用卡套现、洗钱、交易分单等违法经营行为，不得出现虚假申请、恶意倒闭等严重风险行为，否则，<?php echo $conf['sitename']?>系统有权暂停或终止提供本协议服务，并将你的信息报送至中国人民银行和公安部及相关监管机构。</strong></p><p><strong>4.13实物和虚拟。你需利用本服务同时经营实物类和虚拟类的商品或服务时，应当针对实物类和虚拟类的商品或服务分别申请<?php echo $conf['sitename']?>系统商户号，不得用同一<?php echo $conf['sitename']?>系统商户号同时经营实物类和虚拟类的商品或服务。否则，<?php echo $conf['sitename']?>系统有权解除本协议，并追究你的违约责任。</strong></p><p><strong>实物类，指需要物流配送的实物商品或需要记录和核实消费者身份信息的商品或服务；虚拟类，指非实物且不记录购买者身份信息，也无需物流配送的商品或服务。</strong></p><p><strong>4.14安全守则。</strong>你不得对<?php echo $conf['sitename']?>系统的计算机系统和程序采取反向工程手段进行破解，不得对前述系统和程序（包括但不限于源程序、目标程序、软件文档、运行在本地电脑内存中的数据、客户端至服务器端的数据、服务器数据等）进行复制、修改、编译、整合和篡改，不得修改或增加<?php echo $conf['sitename']?>系统提供的任何服务的软件系统的原有功能。</p><p>4.15你应切实维护消费者合法权益，不得对采用不同支付方式的消费者采取歧视性措施。</p><p><strong>4.16你应当遵守的其他义务：</strong></p><p>（1）不得将签购单、签购结算单、业务受理标识牌、终端机具用于<?php echo $conf['sitename']?>系统核准范围以外的用途，也不得给协议许可范围以外的第三方使用；</p><p>（2）不得将<?php echo $conf['sitename']?>系统接口委托或转让给第三方；</p><p>（3）不得招聘无本人身份证原件的人员作为收银员，不得让未经培训合格的收银员操作受理终端；</p><p>（4）金饰店、珠宝店、名牌钟表店、金银币专卖店等风险较高的你必须加装录像监控设施，对支付过程进行清晰记录，录像资料保留时间不少于3个月；</p><p>（5）对单笔交易金额超过（含）5万元人民币的<?php echo $conf['sitename']?>系统交易核对用户身份证原件；</p><p>（6）根据协议约定规范受理<?php echo $conf['sitename']?>系统，在协议有效期内不得拒绝受理<?php echo $conf['sitename']?>系统;</p><p>（7）不得代其他商户发起交易，不得转卖、租借受理终端（网络支付接口）和银行结算账户；</p><p>（8）不得要求其他商户代理发起交易，不得使用转卖、租借的受理终端（网络支付接口）和银行结算账户；</p><p>（9）妥善保管交易数据信息，确保只有授权人员接触，建立健全的内部结算管理制度；</p><p>（10）不得向使用消费者征收任何附加费或额外费用，或提供低于现金支付水平的服务；</p><p><strong>4.17保障消费者合法权益。</strong>你应切实维护用户合法权益，确保使用各种支付方式的用户均享受一致性公平待遇，不得向使用特定支付方式的用户转嫁或变相转嫁<?php echo $conf['sitename']?>系统收取的服务费用，不得无理拒绝用户使用已经开通的支付方式。</p><h4>五、服务费用和交易结算</h4><p><strong>5.1<?php echo $conf['sitename']?>系统手续费（含税）</strong></p><p><strong>5.1.1你使用本服务，应向<?php echo $conf['sitename']?>系统缴纳<?php echo $conf['sitename']?>系统手续费(以下简称”支付手续费”)。</strong></p><p><strong>5.1.2<?php echo $conf['sitename']?>系统将从你的每笔交易款中扣除一定费率的支付手续费，支付手续费的费率以商户平台核准记录的为准；在合作过程中，你可能因满足相关优惠条件而在一定期限内享受<?php echo $conf['sitename']?>系统给予的优惠费率，当你不再满足优惠条件或优惠期限届满时，<?php echo $conf['sitename']?>系统有权将费率恢复为原有费率，具体以商户平台核准记录的为准。</strong></p><p><strong>5.1.3若遇国家政策调整，或中国人民银行、合作机构的政策调整，<?php echo $conf['sitename']?>系统有权据此调整支付手续费率并对你进行通知，你在收到<?php echo $conf['sitename']?>系统通知后五个工作日内对调整后的支付手续费率未提出书面异议的，按调整后的费率执行。双方无法就费率变更达成一致意见的，可终止本协议。</strong></p><p><strong>5.2误差</strong></p><p>各方确认并同意，涉及费率结算如因小数点后两位进位而产生微小误差，各方均予以认可。</p><p><strong>5.3交易结算</strong></p><p>5.3.1<?php echo $conf['sitename']?>系统在扣除支付手续费后，将剩余交易款记账至你的<?php echo $conf['sitename']?>系统商户号。</p><p><strong>5.3.2你的提现账户为你申请本服务时提交的同名银行账户或其他存在合法资金管理关系的单位银行账户，若因你或银行的原因导致交易款项无法按时提现至你提交的银行账户的，<?php echo $conf['sitename']?>系统不承担任何责任。</strong></p><p><strong>5.3.3若你需变更提现账户或需授权结算，应与<?php echo $conf['sitename']?>系统另行签订补充协议或在商户平台自助修改。因你变更账户或指定收款人但未及时通知<?php echo $conf['sitename']?>系统导致增加的额外成本或任何损失，由你承担。</strong></p><p><strong>5.3.4对于发生在T日的交易，若你没有进行特殊设置或操作，<?php echo $conf['sitename']?>系统将按照商户平台核准记录的期限将扣除支付手续费后的交易款项提现至你银行账户，款项到账时间取决于银行系统的清算周期（若你是金融机构或是从事金融业务的其他机构，<?php echo $conf['sitename']?>系统有权根据<?php echo $conf['sitename']?>系统商户平台公告的时间，定期对你的<?php echo $conf['sitename']?>系统商户号余额进行清零，并将对应资金提现至你的银行账户。你应在商户号被清零后及时充值，以免影响手续费、退款等资金结算）。</strong></p><p><strong>5.3.5你可根据商户平台和<?php echo $conf['sitename']?>系统客服的指引申请变更提现规则，最终以商户平台核准记录的为准。</strong></p><p><strong>5.3.6若你接入本服务不满90日或者接入本服务后连续正常交易不满30日，<?php echo $conf['sitename']?>系统不提供T+0资金提现服务，<?php echo $conf['sitename']?>系统将该类你T日的交易资金记账至<?php echo $conf['sitename']?>系统商户号的，你不得在T日划转该交易资金。无论你何时接入本服务，<?php echo $conf['sitename']?>系统均有权根据你的经营状况、业务变化及实际赔付情况调整提现周期，并以电子邮件通知的方式通知你。</strong></p><p><strong>5.3.7你与<?php echo $conf['sitename']?>系统对账数据不一致的，以<?php echo $conf['sitename']?>系统数据为准。</strong></p><p><strong>5.3.8若你要求<?php echo $conf['sitename']?>系统开具发票，应在首次开票前按照<?php echo $conf['sitename']?>系统要求及时提交准确、完整的发票信息，<?php echo $conf['sitename']?>系统每月就<?php echo $conf['sitename']?>系统手续费向你开具上月增值税服务费发票。若你要求开具增值税专用发票，应向<?php echo $conf['sitename']?>系统提交相关资质材料。</strong></p><h4><strong>六、保证金</strong></h4><p>6.1<?php echo $conf['sitename']?>系统有权要求你缴纳风险保证金，保证金额度以商户平台核准记录的为准。在本协议有效期内，风险保证金款项冻结于你保证金账户中，你不得提前解冻、提取或使用。</p><p><strong>6.2<?php echo $conf['sitename']?>系统有权根据你的经营状况、业务变化及实际赔付情况调整你应当缴纳的保证金额度，并以电子邮件通知的方式通知你补足保证金金额，如你未能在收到通知后的五个工作日内补足保证金，则<?php echo $conf['sitename']?>系统有权暂停为你提供服务。如你在收到上述通知后的三十天内未补足保证金，<?php echo $conf['sitename']?>系统可单方解除本合同而无需承担任何法律责任。</strong></p><p><strong>6.3若你在使用公众账号和本服务过程中没有违约行为，且你主动注销本服务满一年仍未受到任何第三方投诉或发生交易纠纷的，应解冻保证金账户的风险保证金，你可自主提取保证金本金，在此之前，你无权动用保证金本金，保证金解冻后无息归还你。</strong></p><p><strong>6.4若你违反国家法律、法规、政策、法令或你违反对用户的承诺或违反与<?php echo $conf['sitename']?>系统的约定致用户或<?php echo $conf['sitename']?>系统受损时，<?php echo $conf['sitename']?>系统有权直接使用你缴纳的保证金对用户或<?php echo $conf['sitename']?>系统进行赔付，保证金不足以赔偿的，<?php echo $conf['sitename']?>系统可以直接从你的待结算款项中扣划，仍不足以赔偿的，可以继续向你追偿。</strong></p><h4><strong>七、退款条款</strong></h4><p>对于你的交易中出现的退款情形，按如下规则处理：</p><p>7.1当你向<?php echo $conf['sitename']?>系统提出退款请求时，你在自己的<?php echo $conf['sitename']?>系统商户号中应有足够资金用于退款，<?php echo $conf['sitename']?>系统有权直接从你的<?php echo $conf['sitename']?>系统商户号中扣除退款金额完成退款，如因你资金不足导致无法退款的，其后果由你自行承担。<?php echo $conf['sitename']?>系统按照你的退款请求处理退款时，如因银行原因或用户原因导致退款失败的，<?php echo $conf['sitename']?>系统可将退款金额退至你的<?php echo $conf['sitename']?>系统商户号，你可再次发起退款请求或自行处理退款。</p><p>7.2退款时，<?php echo $conf['sitename']?>系统不再另行收取交易手续费，但若银行方面需要向<?php echo $conf['sitename']?>系统另行收取相关费用的，则此费用应由你自行承担，<?php echo $conf['sitename']?>系统可在为你垫付该费用后在你的交易款中扣除。</p><p>7.3你负责解决和承担用户拒付交易款项而导致的退款纠纷或责任。</p><h4><strong>八、保密条款</strong></h4><p>8.1除本协议另有约定外，未经一方书面同意，任何一方不得将本协议内容、用户个人信息、用户支付信息以及接口技术、安全协议及证书等透露给第三方。</p><p><strong>8.2各方对在履行协议中获得的商业机密和技术秘密负保密责任。出现下列任一情况时，<?php echo $conf['sitename']?>系统有权披露你的相关商业信息：</strong></p><p><strong>（1）人民银行或银保监会、证监会等金融业监管机构要求<?php echo $conf['sitename']?>系统提供你的相关商业信息的；</strong></p><p><strong>（2）公安机关、人民法院、人民检察院或有权行政机关要求<?php echo $conf['sitename']?>系统提供你的相关商业信息的；</strong></p><p><strong>（3）用户投诉，要求<?php echo $conf['sitename']?>系统提供你的相关商业信息，经<?php echo $conf['sitename']?>系统查实后认为可以提供的。</strong></p><p><strong>本协议所称商业信息包括但不限于你与用户之间的交易单号、交易凭证、资金流水等交易信息。</strong></p><p>8.3各方保证其雇员及代理人履行本条的保密义务。</p><p>8.4上述保密义务在本协议终止后五年内有效。</p><h4><strong>九、违约责任</strong></h4><p><strong>9.1各方中的任何一方违反本协议中所做约定的义务，均构成违约。</strong></p><p><strong>9.2你有下列情形之一的，<?php echo $conf['sitename']?>系统有权单方面解除本协议并要求你承担相关赔偿责任：</strong></p><p><strong>（1）直接或间接参与欺诈，或出租、出借、出售、购买银行账户（含银行卡）或支付账户，或在网上买卖POS机（包括MPOS）、刷卡器等受理终端，或涉嫌实施其他违法犯罪活动的；</strong></p><p><strong>（2）经营及财务状况恶化无法正常经营，或被全国企业信用信息公示系统列入“严重违法失信企业名单”，或单位注册地址不存在或者虚构经营场所的；</strong></p><p><strong>（3）你或其法定代表人、负责人被中国支付清算协会、银行卡清算机构、其他国家机关、企事业单位列入黑名单，或存在被国家机关、行业协会的处罚记录的；</strong></p><p><strong>（4）实施违规操作，或违反本协议、《<?php echo $conf['sitename']?>系统服务条款》、《微信公众平台服务协议》等约定，且经指出拒不改正或在合理期间内虽有改正但无法达到<?php echo $conf['sitename']?>系统整改要求和目标的；</strong></p><p><strong>（5）无理拒绝或故意拖延<?php echo $conf['sitename']?>系统交易查询、调单查询或监查要求的；</strong></p><p><strong>（6）进入破产程序、解散、营业执照被吊销；</strong></p><p><strong>（7）实施有损<?php echo $conf['sitename']?>系统或腾讯利益行为的；</strong></p><p><strong>（8）违反本协议或利用<?php echo $conf['sitename']?>系统提供的服务从事非法业务的；</strong></p><p><strong>（9）你的软硬件系统存在安全问题，经<?php echo $conf['sitename']?>系统通知后拒不整改的；</strong></p><p><strong>（10）出现风险事件或经<?php echo $conf['sitename']?>系统判断交易异常的；</strong></p><p><strong>（11）违反<?php echo $conf['sitename']?>系统的相关规则和制度的。</strong></p><h4><strong>十、账号注销</strong></h4><p><strong>10.1发生下列情形之一的，<?php echo $conf['sitename']?>系统有权注销你的<?php echo $conf['sitename']?>系统商户号，法律另有规定或本协议另有约定的除外：</strong></p><p><strong>（1）你主动申请注销<?php echo $conf['sitename']?>系统商户号的；</strong></p><p><strong>（2）本协议解除或终止的；</strong></p><p><strong>（3）你利用本服务从事非法活动的；</strong></p><p><strong>（4）你违反本协议或违反与<?php echo $conf['sitename']?>系统签订的其他协议的。</strong></p><p><strong>10.2无论你的<?php echo $conf['sitename']?>系统商户号是否被注销，<?php echo $conf['sitename']?>系统均有权依据法律规定或国家机关的合法要求，冻结、扣划你<?php echo $conf['sitename']?>系统商户号中的资金。</strong></p><h4><strong>十一、免责条款</strong></h4><p><strong>11.1因受不可抗力影响而不能履行或不能完全履行本协议的一方可以免除责任。不可抗力是指本协议各方不能预见、不能避免、不能克服的客观情况。此外，鉴于网络之特殊属性，发生包括但不限于下列任何情形导致<?php echo $conf['sitename']?>系统不能履行本协议下义务的，各方可以免责：</strong></p><p><strong>（1）黑客攻击、计算机病毒侵入或发作；</strong></p><p><strong>（2）计算机系统遭到破坏、瘫痪或无法正常使用而导致信息或纪录的丢失、<?php echo $conf['sitename']?>系统不能提供本协议项下之服务的；</strong></p><p><strong>（3）电信部门技术调整导致之重大影响的；</strong></p><p><strong>（4）因政府管制而造成服务终止的；</strong></p><p><strong>（5）其它非各方原因造成的。</strong></p><p><strong>11.2遇上述不可抗力事件的任何一方，应将该事件立即书面通知其他方。各方按照事件对协议履行的影响程度，再行决定是否继续履行本协议。</strong></p><h4><strong>十二、风险提示及特别约定</strong></h4><p>12.1各方对于“中国国内电子商务环境尚未成熟，电子商务立法以及信用体制还不完善”的现状以及开展电子商务业务存在的风险性均完全知悉，各方均承诺采取合理的风险防范措施，以尽量避免或减小风险。</p><p><strong>12.2本服务交易过程中，你应积极防范银行卡持卡人拒付风险，及时解决交易中出现的问题：</strong></p><p><strong>（1）若在交易中如出现包括但不限于交易不真实、欺诈、伪冒交易、持卡人账户信息泄漏或你违反国家法律规定或你违反对用户的承诺以及你违反与<?php echo $conf['sitename']?>系统的约定之情形，你应自行承担上述情形造成的全部损失；</strong></p><p><strong>（2）若在交易中如出现持卡人否认交易、持卡人拒付、集中转入分散转出等可疑情形的，你应依据本协议第4.8和4.9条之要求向<?php echo $conf['sitename']?>系统提供相应的交易凭证，若你怠于提供凭证，或你提供的凭证不符合相关行业内标准，或在<?php echo $conf['sitename']?>系统书面通知（含电子邮件通知）后你未及时停止可疑交易、控制相应资金的等，你应自行承担上述情形造成的全部损失。</strong></p><p><strong>你因上述情形给<?php echo $conf['sitename']?>系统造成损失的，<?php echo $conf['sitename']?>系统有权直接从你的保证金中扣回与损失金额同等的金额，你需及时补足保证金。保证金不足以赔偿的，<?php echo $conf['sitename']?>系统可以直接从你的待结算款项中扣划，仍不足以赔偿的，可以继续向你追偿。</strong></p><p>12.3你在进行支付交易的过程中，应严格遵守中国人民银行网上银行业务和信用卡交易相关的政策法规，不得进行虚假交易、非法套现、洗钱等行为。你不得直接或变相从事互联网赌博、色情平台，互联网销售彩票平台，非法外汇、贵金属投资交易平台，非法证券期货类交易平台，代币发行融资及虚拟货币交易平台，也不得未经监管部门批准通过互联网开展资产管理业务以及未取得省级政府批文的大宗商品交易场所等非法交易，否则<?php echo $conf['sitename']?>系统有权终止为其提供支付结算服务。</p><p><strong>12.4如你申请开通大额支付功能，应确认并同意遵守如下条款：“你保证将<?php echo $conf['sitename']?>系统所提供的大额支付功能用于实名制业务，否则，你应承担因违反上述承诺而造成的一切风险和法律责任，你应对受损方作出无条件的先行赔付。</strong></p><p>实名制业务，指用户使用<?php echo $conf['sitename']?>系统提供的在线支付服务购买商品或服务时，该用户提交了所购买商品或服务的最终接收方（或服务的最终受益方）的姓名、身份证号码等真实身份信息的业务</p><h4><strong>十三、知识产权</strong></h4><p>13.1<?php echo $conf['sitename']?>系统在本合作中提供的内容（包括但不限于商标、标识、网页、文字、图片等）的知识产权归<?php echo $conf['sitename']?>系统所有。</p><p>13.2除另有特别声明外，<?php echo $conf['sitename']?>系统在本合作中提供的软件系统、技术接口、安全证书等所依托的著作权、专利权及其他知识产权均归<?php echo $conf['sitename']?>系统所有。</p><p>13.3上述知识产权均受到法律保护，未经<?php echo $conf['sitename']?>系统或相关权利人许可，不得以任何形式进行使用或创造相关衍生作品。</p><p>13.4<?php echo $conf['sitename']?>系统对带有<?php echo $conf['sitename']?>系统字样、标识、logo、图片等信息的物料、宣传资料和扫码设备享有知识产权，你不得在经营场所实施或协助、放任他人实施替换、遮盖、涂抹、藏匿、毁坏带有<?php echo $conf['sitename']?>系统字样、标识、logo、图片等信息的物料、宣传资料和扫码设备的行为，否则，你应按照<?php echo $conf['sitename']?>系统的要求恢复原状、赔偿损失。</p><h4><strong>十四、协议变更</strong></h4><p><strong><?php echo $conf['sitename']?>系统有权根据需要不时地制定、修改本协议，如本协议有任何变更，财付将对变更事项在商户平台进行公告。如你不同意相关变更，必须立即以书面的方式通知<?php echo $conf['sitename']?>系统终止为你提供服务。任何修订或新协议将按照法律法规及监管规定在微信公众平台上公布生效。你登录或继续使用服务即表示你接受经修订的协议。</strong></p><h4><strong>十五、适用法律及争议解决</strong></h4><p><strong>15.1本协议之解释、适用、争议解决等一切事宜，均适用中华人民共和国大陆地区法律。</strong></p><p><strong>15.2因本协议产生任何纠纷时，各方应友好协商，协商不成的，各方应将争议提交<?php echo $conf['sitename']?>系统所在地有管辖权的人民法院诉讼解决。</strong></p><h4><strong>十六、协议有效期、自动续期和提前终止协议</strong></h4><p><strong>16.1本协议的有效时间以商户平台确认的时间为准，默认为长期有效；除本协议5.1.2、5.1.3条约定之情形外，若<?php echo $conf['sitename']?>系统在协议有效期内提出费率变更请求，并以微信消息、电子邮件或商户平台信息等形式通知你，自信息发出之日起30日内，你继续使用本服务的，<?php echo $conf['sitename']?>系统有权自30日届满之日起按照变更后的费率向你收取手续费，并从你的待结算款中扣除。</strong></p><p><strong>16.2各方有权基于各自的营运需要提前终止本协议，且无需承担任何法律责任。需提前终止本协议的，主动提出方应提前一个月以书面或电子邮件形式通知各方。</strong></p><p><strong>16.3协议解除或终止后，涉及到保证金、退款和保密的条款依然有效，各方应继续遵照执行。</strong></p><p><strong>16.4本协议一式貳份，双方各执壹份，具有同等法律效力。</strong></p>

          </section>
      </article>
    </div>
  </div>

</div>

<?php require INDEX_ROOT.'foot.php';?>