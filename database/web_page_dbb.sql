-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 10:22 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

create database web_page_dbb;
use web_page_dbb;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_page_dbb`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `masp` int(11) DEFAULT NULL,
  `nickname` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_dung` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_bl` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `masp`, `nickname`, `noi_dung`, `ngay_bl`) VALUES
(1, 1, 'Truc', 'Rat tot', '2020-05-26 12:30:34'),
(2, 5, 'ABC', 'Tot', '2020-05-26 12:30:34'),
(4, 2, 'Le Thi C', 'Tot\r\n', '2020-05-26 12:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `chinh_sach_bao_mat`
--

CREATE TABLE `chinh_sach_bao_mat` (
  `id` int(11) NOT NULL,
  `chi_tiet` longtext COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chinh_sach_bao_mat`
--

INSERT INTO `chinh_sach_bao_mat` (`id`, `chi_tiet`) VALUES
(1, 'CHÍNH SÁCH BẢO MẬT CỦA T&T SHOP<br>\r\n<br>\r\nBản cập nhật ngày 26 tháng 5 năm 2020<br>\r\n<br>\r\n1. Giới Thiệu Về Chính Sách Bảo Mật<br>\r\n<br>\r\n1.1. Tại CÔNG TY TNHH RECESS (“LAZADA”), chúng tôi luôn coi trọng quyền riêng tư của Quý Khách. Chúng tôi cam kết tuân thủ tất cả các luật áp dụng về bảo mật dữ liệu/quyền riêng tư.<br>\r\n<br>\r\n1.2. Trong quá trình cung cấp dịch vụ, thông tin, tính năng và/ hoặc chức năng (sau đây gọi chung là “ Dịch Vụ”) hoặc quyền truy cập vào Nền Tảng (như được xác định trong Điều Khoản Và Điều Kiện) cho Quý Khách, chúng tôi sẽ thu thập, sử dụng, tiết lộ, lưu trữ và/hoặc xử lý những dữ liệu, bao gồm cả dữ liệu cá nhân của Quý Khách.<br>\r\n<br>\r\n1.3. Chính Sách Bảo Mật này được lập để Quý Khách biết về cách thức chúng tôi thu thập, sử dụng, tiết lộ, lưu trữ và/hoặc xử lý dữ liệu mà chúng tôi thu thập và tiếp nhận trong quá trình cung cấp Dịch Vụ hoặc quyền truy cập vào Nền Tảng cho Quý Khách, người sử dụng Nền Tảng. Chúng tôi sẽ chỉ thu thập, sử dụng, tiết lộ, lưu trữ và/hoặc xử lý dữ liệu cá nhân của Quý Khách theo Chính Sách Bảo Mật này.<br>\r\n<br>\r\n1.4. Điều quan trọng là Quý Khách phải đọc Chính Sách Bảo Mật này cùng với bất kỳ thông báo được áp dụng nào khác mà chúng tôi gửi đến trong những trường hợp cụ thể khi chúng tôi thu thập, sử dụng, tiết lộ và/hoặc xử lý dữ liệu cá nhân của Quý Khách để Quý Khách có thể nhận thức đầy đủ về cách thức và lý do chúng tôi sử dụng dữ liệu cá nhân của Quý Khách.<br>\r\n<br>\r\nChính sách bảo mật này bao gồm những phần sau đây:<br>\r\n<br>\r\n1. Giới Thiệu Về Chính Sách Bảo Mật Của Lazada<br>\r\n<br>\r\n2. Dữ Liệu Cá Nhân Chúng Tôi Thu Thập Từ Quý Khách<br>\r\n<br>\r\n3. Sử Dụng Và Tiết Lộ Dữ Liệu Cá Nhân<br>\r\n<br>\r\n4. Thu Hồi Sự Chấp Thuận Về Việc Tiếp Tục Sử Dụng, Tiết Lộ, Lưu Trữ Và/Hoặc Xử Lý Dữ Liệu Cá Nhân<br>\r\n<br>\r\n5. Phương Pháp Cập Nhật Dữ Liệu Cá Nhân Của Quý Khách<br>\r\n<br>\r\n6. Truy Cập Dữ Liệu Cá Nhân Của Quý Khách<br>\r\n<br>\r\n7. Bảo Mật Dữ Liệu Cá Nhân Của Quý Khách<br>\r\n<br>\r\n8. Thời Gian Lưu Giữ Dữ Liệu Cá Nhân<br>\r\n<br>\r\n9. Người Vị Thành Niên<br>\r\n<br>\r\n10. Thu Thập Dữ Liệu Máy Tính<br>\r\n<br>\r\n11. Quyền Của Lazada Trong Việc Tiết Lộ Thông Tin Cá Nhân<br>\r\n<br>\r\n12. Trang Web Của Bên Thứ Ba<br>\r\n<br>\r\n13. Đơn Vị Thu Thập Và Quản Lý Dữ Liệu Cá Nhân<br>\r\n<br>\r\n14. Câu Hỏi, Phản Hồi, Thắc Mắc, Kiến Nghị Hoặc Khiếu Nại<br>\r\n<br>\r\n1.5. BẰNG CÁCH NHẤP VÀO “ĐĂNG KÝ”, “ TÔI ĐỒNG Ý VỚI CHÍNH SÁCH BẢO MẬT CỦA LAZADA”, “TÔI ĐỒNG Ý VÀ CHO PHÉP VIỆC THU THẬP, SỬ DỤNG, TIẾT LỘ, LƯU TRỮ VÀ/HOẶC XỬ LÝ DỮ LIỆU CÁ NHÂN CỦA TÔI CHO MỤC ĐÍCH ĐÃ NÊU TRONG VÀ PHÙ HỢP VỚI CÁC ĐIỀU KHOẢN CỦA CHÍNH SÁCH BẢO MẬT CỦA LAZADA” HOẶC NHỮNG NỘI DUNG TƯƠNG TỰ ĐƯỢC THỂ HIỆN TẠI TRANG ĐĂNG KÝ CỦA LAZADA, QUÝ KHÁCH XÁC NHẬN RẰNG QUÝ KHÁCH ĐÃ ĐƯỢC THÔNG BÁO VÀ HIỂU RÕ CÁC ĐIỀU KHOẢN CỦA CHÍNH SÁCH BẢO MẬT NÀY VÀ QUÝ KHÁCH ĐÃ ĐỒNG Ý VÀ CHO PHÉP VIỆC THU THẬP, SỬ DỤNG, TIẾT LỘ, LƯU TRỮ VÀ/HOẶC XỬ LÝ DỮ LIỆU CÁ NHÂN NHƯ ĐÃ ĐƯỢC MÔ TẢ VÀ QUY ĐỊNH TẠI CHÍNH SÁCH BẢO MẬT NÀY.<br>\r\n<br>\r\n1.6. Chúng tôi có thể cập nhật Chính Sách Bảo Mật này tại từng thời điểm. Bất kỳ thay đổi nào đối với Chính Sách Bảo Mật này do chúng tôi thực hiện trong tương lai sẽ được đăng trên trang này, và chỉ áp dụng đối với những thay đổi quan trọng (khi thích hợp và/hoặc được cho phép theo quy định pháp luật) sẽ được thông báo cho Quý Khách khi Quý Khách tiếp tục sử dụng Dịch Vụ, truy cập vào Nền Tảng hoặc sử dụng Dịch Vụ, bao gồm cả việc đặt đơn hàngtrên Nền Tảng, sẽ cấu thành việc Quý Khách xác nhận và chấp nhận đối với những thay đổi đối với Chính Sách Bảo Mật này do chúng tôi thực hiện. Vui lòng thường xuyên kiểm tra lại Chính Sách Bảo Mật này để theo dõi bất kỳ cập nhật hoặc thay đổi nào đối với Chính Sách Bảo Mật này.<br>\r\n<br>\r\n1.7. Chính Sách Bảo Mật này được áp dụng cùng với các thông báo, điều khoản hợp đồng và điều khoản đồng ý khác được áp dụng có liên quan đến việc thu thập, lưu trữ, sử dụng, tiết lộ và/hoặc xử lý dữ liệu cá nhân của Quý Khách bởi chúng tôi và không nhằm mục đích vô hiệu hóa các điều khoản đó trừ trường hợp được quy định cụ thể khác đi.<br>\r\n<br>\r\n1.8. Quý Khách có thể vào Nền Tảng và lướt qua các nội dung trên đó mà không cần phải cung cấp bất kỳ thông tin cá nhân nào. Tuy nhiên, Quý Khách sẽ được yêu cầu đăng ký tài khoản nếu Quý Khách muốn sử dụng Dịch Vụ.<br>\r\n<br>\r\n2. Dữ Liệu Cá Nhân Chúng Tôi Thu Thập Từ Quý Khách<br>\r\n<br>\r\n2.1. Dữ Liệu Cá Nhân có nghĩa là bất kỳ thông tin nào, dù được ghi lại dưới dạng hữu hình hay không, từ đó danh tính của một cá nhân được thể hiện rõ ràng hoặc có thể được xác định một cách hợp lý và trực tiếp bởi cá thể nắm giữ thông tin hoặc khi được sắp xếp với thông tin khác sẽ, trực tiếp hoặc gián tiếp, chắc chắn định danh được một cá nhân.<br>\r\n<br>\r\n2.2. Trong quá trình Quý Khách sử dụng Nền Tảng và sử dụng Dịch Vụ, chúng tôi có thể thu thập dữ liệu cá nhân từ Quý Khách, bao gồm những thông tin sau:<br>\r\n<br>\r\na. Dữ liệu định danh như tên, giới tính, ảnh hồ sơ và ngày sinh;<br>\r\n<br>\r\nb. Dữ liệu liên lạc như địa chỉ thanh toán, địa chỉ giao hàng, địa chỉ email và số điện thoại;<br>\r\n<br>\r\nc. Dữ liệu tài khoản như tài khoản ngân hàng và chi tiết thanh toán;<br>\r\n<br>\r\nd. Dữ liệu giao dịch như chi tiết về đơn đặt hàng và thanh toán được gửi đến và đi từ Quý Khách cũng như các chi tiết khác về các sản phẩm và Dịch Vụ mà Quý Khách đã mua hoặc có được thông qua Nền Tảng;<br>\r\n<br>\r\ne. Dữ liệu kỹ thuật như địa chỉ giao thức trực tuyến (Internet Protocol - IP), dữ liệu đăng nhập, loại và phiên bản trình duyệt, cài đặt múi giờ và vị trí, loại và phiên bản trình cắm trình duyệt (plug-in browser), hệ điều hành và nền tảng, mã nhận dạng thiết bị di động quốc tế, nhận dạng thiết bị và các thông tin và công nghệ khác trên các thiết bị Quý Khách sử dụng để truy cập Nền Tảng;<br>\r\n<br>\r\nf. Dữ liệu hồ sơ như tên người dùng và mật khẩu, dữ liệu về mua hàng hoặc đơn đặt hàng của Quý Khách, sở thích, phản hồi và trả lời khảo sát của Quý Khách;<br>\r\n<br>\r\ng. Dữ liệu sử dụng như thông tin về về việc sử dụng Nền Tảng của Quý Khách, sản phẩm và Dịch Vụ hoặc việc Quý Khách xem bất kỳ nội dung nào trên Nền Tảng;<br>\r\n<br>\r\nh. Dữ liệu về vị trí như khi Quý Khách chụp và chia sẻ vị trí của Quý Khách với chúng tôi dưới dạng hình ảnh hoặc video và tải nội dung đó lên Nền Tảng;<br>\r\n<br>\r\ni. Dữ liệu về sinh trắc học như tệp tin giọng nói khi Quý Khách sử dụng chức năng tìm kiếm bằng giọng nói của chúng tôi cũng như các tính năng cơ thể và giọng nói khác của chính Quý Khách và/hoặc người khác có trong video của Quý Khách khi Quý Khách tải video lên Nền Tảng; và<br>\r\n<br>\r\nj. Dữ liệu về tiếp thị và truyền thông như sở thích của Quý Khách trong việc nhận thông tin tiếp thị từ chúng tôi và các bên thứ ba của chúng tôi và các sở thích giao tiếp của Quý Khách.<br>\r\n<br>\r\n2.3. Trong quá trình Quý Khách sử dụng Nền Tảng và Dịch Vụ, chúng tôi có thể thu thập dữ liệu cá nhân từ Quý Khách trong các trường hợp sau:<br>\r\n<br>\r\na. Khi Quý Khách tạo một tài khoản với chúng tôi;<br>\r\n<br>\r\nb. Khi Quý Khách đăng ký bất kỳ Dịch Vụ nào hoặc mua bất kỳ Sản Phẩm nào có sẵn trên Nền Tảng;<br>\r\n<br>\r\nc. Khi Quý Khách sử dụng bất kỳ tính năng hoặc chức năng nào có sẵn trên Nền Tảng hoặc Dịch Vụ;<br>\r\n<br>\r\nd. Khi Quý Khách ghi lại bất kỳ nội dung nào do người dung khởi tạo được tải lên trên Nền Tảng;<br>\r\n<br>\r\ne. Khi Quý Khách sử dụng chức năng trò chuyện trên Nền Tảng;<br>\r\n<br>\r\nf. Khi Quý Khách đăng ký các ấn phẩm hoặc tài sản tiếp thị của chúng tôi;<br>\r\n<br>\r\ng. Khi Quý Khách tham gia một cuộc thi, đợt khuyến mãi hoặc khảo sát;<br>\r\n<br>\r\nh. Khi Quý Khách tham gia vào bất kỳ hoạt động hoặc chiến dịch khuyến mãi nào trên Nền Tảng;<br>\r\n<br>\r\ni. Khi Quý Khách đăng nhập vào tài khoản của mình trên Nền Tảng hoặc tương tác với chúng tôi thông qua một dịch vụ hoặc ứng dụng khác như Facebook hoặc Google;<br>\r\n<br>\r\nj. Khi bất kỳ người dùng nào khác trên Nền Tảng đăng bất kỳ nhận xét nào về nội dung Quý Khách đã tải lên trên Nền Tảng hoặc khi Quý Khách đăng bất kỳ nhận xét nào về nội dung của người dùng khác được tải lên Nền Tảng;<br>\r\n<br>\r\nk. Khi bên thứ ba gửi khiếu nại về Quý Khách hoặc nội dung Quý Khách đã đăng trên Nền Tảng;<br>\r\n<br>\r\nl. Khi Quý Khách truy cập hoặc sử dụng các trò chơi di động (bao gồm các trò chơi tương tác ảo của chúng tôi) trên Nền Tảng; và<br>\r\n<br>\r\nm. Khi Quý Khách tương tác với chúng tôi ngoại tuyến, kể cả khi Quý Khách tương tác với các tổ chức dịch vụ chăm sóc khách hàng thuê ngoài của chúng tôi.<br>\r\n<br>\r\n2.4. Trong quá trình Quý Khách sử dụng Nền Tảng và sử dụng Dịch Vụ, Quý Khách hoàn toàn đồng ý cho phép việc chuyển dữ liệu cá nhân của Quý Khách từ bên thứ ba cho Lazada cho các mục đích được nêu trong Chính Sách Bảo Mật này hoặc bất kỳ điều khoản nào khác.<br>\r\n<br>\r\n2.5. Quý Khách phải gửi dữ liệu cá nhân một cách chính xác và không gây nhầm lẫn và Quý Khách phải cập nhật dữ liệu thường xuyên và thông báo cho chúng tôi về bất kỳ thay đổi nào đối với dữ liệu cá nhân Quý Khách đã cung cấp cho chúng tôi. Chúng tôi sẽ có quyền yêu cầu những tài liệu để xác minh dữ liệu cá nhân do Quý Khách cung cấp như một phần của quy trình xác minh thông tin khách hàng của chúng tôi.<br>\r\n<br>\r\n2.6. Chúng tôi sẽ chỉ có thể thu thập dữ liệu cá nhân của Quý Khách nếu Quý Khách tự nguyện gửi dữ liệu cá nhân cho chúng tôi hoặc theo quy định khác trong Chính Sách Bảo Mật này. Trong trường hợp Quý Khách không gửi dữ liệu cá nhân của mình cho chúng tôi hoặc sau đó thu hồi sự chấp thuận của Quý Khách đối với việc chúng tôi sử dụng dữ liệu cá nhân của Quý Khách, chúng tôi không thể cung cấp cho Quý Khách Dịch Vụ hoặc quyền truy cập vào Nền Tảng.<br>\r\n<br>\r\n2.7. Quý Khách có thể truy cập và cập nhật thông tin cá nhân của Quý Khách gửi cho chúng tôi bất cứ lúc nào như được mô tả dưới đây.<br>\r\n<br>\r\n2.8. Nếu Quý Khách cung cấp dữ liệu cá nhân của bất kỳ bên thứ ba nào cho chúng tôi, Quý Khách cam đoan và bảo đảm rằng Quý Khách đã có được sự đồng ý, chấp thuận và cho phép cần thiết từ bên thứ ba đó để chia sẻ và chuyển dữ liệu cá nhân của họ cho chúng tôi và để chúng tôi thu thập, lưu trữ, sử dụng và tiết lộ dữ liệu đó theo Chính Sách Bảo Mật này.<br>\r\n<br>\r\n2.9. Nếu Quý Khách đăng ký làm người dùng trên Nền Tảng của chúng tôi bằng tài khoản mạng xã hội của Quý Khách hoặc liên kết tài khoản Lazada với tài khoản mạng xã hội của Quý Khách hoặc sử dụng một số tính năng phương tiện truyền thông khác của Lazada, chúng tôi có thể truy cập dữ liệu cá nhân về Quý Khách mà Quý Khách đã tự nguyện cung cấp các nhà cung cấp mạng xã hội theo chính sách của họ và chúng tôi sẽ quản lý dữ liệu cá nhân của Quý Khách theo Chính Sách Bảo Mật này.<br>\r\n<br>\r\n3. Sử dụng và tiết lộ dữ liệu cá nhân<br>\r\n<br>\r\n3.1. Dữ liệu cá nhân mà chúng tôi thu thập từ Quý Khách hoặc thông qua bên thứ ba có thể được chúng tôi sử dụng hoặc chia sẻ hoặc chuyển giao cho bên thứ ba khác (bao gồm các công ty có liên quan, nhà cung cấp dịch vụ thứ ba và nhà cung cấp dịch vụ và công ty có liên quan của họ ở trong và ngoài nước, nhà bán hàng thứ ba và người dùng khác), cho các mục đích nhất định có thể bao gồm những nội dung sau đây:<br>\r\n<br>\r\na. Để tạo điều kiện cho Quý Khách sử dụng Dịch Vụ hoặc truy cập vào Nền Tảng,<br>\r\n<br>\r\nb. Để trả lời các câu hỏi, phản hồi, khiếu nại hoặc tranh chấp của Quý Khách trực tiếp hoặc thông qua các công ty dịch vụ chăm sóc khách hàng thuê ngoài của chúng tôi;<br>\r\n<br>\r\nc. Để xử lý các đơn đặt hàng Quý Khách gửi qua Nền Tảng (các khoản thanh toán Quý Khách thực hiện thông qua Nền Tảng cho các Sản Phẩm mà được bán bởi chúng tôi hay nhà bán hàng thứ ba, sẽ được xử lý bởi bên cung cấp dịch vụ của chúng tôi);<br>\r\n<br>\r\nd. Để vận chuyển và giao các sản phẩm mà Quý Khách đã mua thông qua Nền Tảng được bán bởi chúng tôi hay nhà bán hàng thứ ba. Chúng tôi có thể chuyển thông tin cá nhân của Quý Khách cho bên thứ ba để giao sản phẩm cho Quý Khách (ví dụ: đơn vị chuyển phát hoặc nhà cung cấp của chúng tôi), bất kể sản phẩm được bán thông qua Nền Tảng bởi chính chúng tôi hay nhà bán hàng thứ ba;<br>\r\n<br>\r\ne. Để cập nhật cho Quý Khách về việc giao sản phẩm, bất kể sản phẩm được bán thông qua Nền Tảng bởi chúng tôi hay nhà bán hàng thứ ba và cho mục đích chăm sóc khách hàng;<br>\r\n<br>\r\nf. Để so sánh thông tin và xác minh với các bên thứ ba để đảm bảo rằng thông tin đó là chính xác;<br>\r\n<br>\r\ng. Để xác định danh tính của Quý Khách cho các mục đích phát hiện gian lận;<br>\r\n<br>\r\nh. Để tạo điều kiện gỡ xuống các mặt hàng bị cấm và kiểm soát từ Nền Tảng của chúng tôi;<br>\r\n<br>\r\ni. Để quản lý tài khoản của Quý Khách mở tại chúng tôi (nếu có);<br>\r\n<br>\r\nj. Để xác minh và thực hiện các giao dịch tài chính liên quan đến các khoản thanh toán mà Quý Khách thực hiện trực tuyến;<br>\r\n<br>\r\nk. Để kiểm tra việc tải dữ liệu từ Nền Tảng xuống;<br>\r\n<br>\r\nl. Để cải thiện cách trình bày hoặc nội dung của các trang trong Nền Tảng và tùy chỉnh chúng cho người dùng;<br>\r\n<br>\r\nm. Để xác định người truy cập trên Nền Tảng;<br>\r\n<br>\r\nn. Để thực hiện nghiên cứu về hành vi của người dùng và thống kê số lượng người dùng;<br>\r\n<br>\r\no. Để cung cấp cho Quý Khách những thông tin mà chúng tôi nghĩ rằng Quý Khách có thể thấy hữu ích hoặc Quý Khách đã yêu cầu từ chúng tôi, bao gồm thông tin về các Sản Phẩm và Dịch Vụ của Bên bán thứ ba của chúng tôi, với điều kiện là Quý Khách cho biết rằng Quý Khách không phản đối việc liên hệ vì các mục đích này;<br>\r\n<br>\r\np. Để hiển thị tên dùng hoặc tên và hồ sơ của Quý Khách trên Nền Tảng;<br>\r\n<br>\r\nq. Để cho phép người dùng khác nhận dạng Quý Khách (thông qua \"Tìm Bạn Bè của tôi\" hoặc bất kỳ chức năng tương tự nào khác) với tư cách là người dùng Dịch Vụ, cho phép Quý Khách tìm người dùng khác và kết nối với họ trên Nền Tảng và hỗ trợ chức năng xã hội hóa của Dịch Vụ;<br>\r\n<br>\r\nr. Để quảng bá Dịch Vụ và sử dụng thông tin mà Quý Khách cung cấp cho chúng tôi như các nội dung do người dung khởi tạo (bao gồm nội dung video) mà Quý Khách có thể chọn tải lên hoặc phát trên Nền Tảng của chúng tôi và sẽ được đánh giá trên internet và có thể được chia sẻ thông qua phương tiện internet đại chúng (việc chia sẻ thông qua phương tiện internet đại chúng sẽ không nằm trong tầm kiểm soát của chúng tôi), như một phần của chiến dịch quảng cáo và tiếp thị để quảng bá Nền Tảng;<br>\r\n<br>\r\ns. Để xử lý bất kỳ khiếu nại, phản hồi, hành động thực thi và yêu cầu gỡ xuống liên quan đến bất kỳ nội dung nào Quý Khách đã tải lên Nền Tảng;<br>\r\n<br>\r\nt. Để hiển thị trên bảng điểm trên Nền Tảng liên quan đến các chiến dịch, trò chơi di động hoặc bất kỳ hoạt động nào khác;<br>\r\n<br>\r\nu. Để lấy thêm các thuộc tính liên quan đến Quý Khách dựa trên dữ liệu cá nhân do Quý Khách cung cấp (cho chúng tôi hoặc bên thứ ba), để cung cấp cho Quý Khách nhiều thông tin mang tính định hướng và/hoặc có liên quan hơn;<br>\r\n<br>\r\nv. Để gửi cho Quý Khách các tài liệu tiếp thị hoặc xúc tiến thương mại về các sản phẩm và dịch vụ của chúng tôi hoặc nhà bán hàng, cung cấp dịch vụ thứ ba (trừ trường hợp Quý Khách chọn từ chối nhận các tài liệu này); và<br>\r\n<br>\r\nw. Chúng tôi cũng có thể tiến hành các quy trình đưa ra những quyết định tự động theo bất kỳ mục đích nào trong số này.<br>\r\n<br>\r\n3.2. Để tránh hiểu lầm, Quý Khách xác nhận và cho phép Lazada chia sẻ thông tin ẩn danh, bao gồm các trường hợp sau:<br>\r\n<br>\r\na. Thông tin tổng hợp. Chúng tôi có thể tiến hành các dự án phân tích dữ liệu chung với các nhà cung cấp thứ ba được lựa chọn bằng cách sử dụng thông tin ẩn danh để dự đoán sở thích của người dùng và cung cấp cho người dùng nhiều thông tin đang hướng tới và/hoặc có liên quan hơn dựa trên thông tin tổng hợp về các hoạt động của người dùng bên ngoài Nền Tảng.<br>\r\n<br>\r\nb. Quảng cáo dựa trên hành vi. Chúng tôi có thể hợp tác với các bên thứ ba đã chọn bằng cách sử dụng thông tin ẩn danh để đưa ra các phương thức nhất định để có thể mang đến các quảng cáo phù hợp hơn cho người dùng.<br>\r\n<br>\r\n3.3. Quý Khách có thể hủy đăng ký nhận thông tin tiếp thị bất cứ lúc nào bằng cách sử dụng chức năng hủy đăng ký trong tài liệu tiếp thị điện tử. Chúng tôi có thể sử dụng thông tin liên lạc của Quý Khách để gửi các bản tin từ chúng tôi và từ các công ty liên quan của chúng tôi.<br>\r\n<br>\r\n3.4. Trong trường hợp đặc biệt, chúng tôi có thể được yêu cầu tiết lộ thông tin cá nhân, chẳng hạn như khi có cơ sở để tin rằng việc tiết lộ là cần thiết để ngăn chặn những mối đe dọa đến tính mạng hoặc sức khỏe, hoặc cho các mục đích thực thi pháp luật, hoặc để thực hiện các yêu cầu và đề nghị theo luật định.<br>\r\n<br>\r\n3.5. Chúng tôi có thể chia sẻ và cho phép chia sẻ dữ liệu cá nhân của Quý Khách với các bên thứ ba và các bên liên kết của chúng tôi cho bất kỳ mục đích nào nêu trên, bao gồm nhằm tạo điều kiện cho Quý Khách sử dụng Dịch Vụ, hoàn thành giao dịch với Quý Khách, quản lý tài khoản của Quý Khách và mối quan hệ của chúng tôi với Quý Khách, tiếp thị và thực hiện bất kỳ yêu cầu, quy định pháp luật và yêu cầu khác mà chúng tôi nhận thấy là cần thiết. Khi chia sẻ dữ liệu cá nhân của Quý Khách, chúng tôi sẽ nỗ lực đảm bảo rằng các bên thứ ba và các bên liên kết của chúng tôi sẽ bảo vệ dữ liệu cá nhân của Quý Khách tránh khỏi sự truy cập, thu thập, sử dụng, tiết lộ, xử lý trái phép hoặc các rủi ro tương tự và chỉ lưu dữ liệu cá nhân của Quý Khách trong trường hợp họ cần dữ liệu cá nhân của Quý Khách để thực hiện các mục đích nêu trên.<br>\r\n<br>\r\n3.6. Nếu Quý Khách ở tại Việt Nam, chúng tôi có thể chuyển hoặc cho phép chuyển dữ liệu cá nhân của Quý Khách ra khỏi Việt Nam cho bất kỳ mục đích nào được nêu trong Chính Sách Bảo Mật này.<br>\r\n<br>\r\n4. Thu Hồi Sự Chấp Thuận Về Việc Tiếp Tục Sử Dụng, Tiết Lộ, Lưu Trữ Và/Hoặc Xử Lý Dữ Liệu Cá Nhân<br>\r\n<br>\r\n4.1. Quý Khách có thể thông báo về việc thu hồi sự chấp thuận liên quan đến việc tiếp tục sử dụng, tiết lộ, lưu trữ và/hoặc xử lý dữ liệu cá nhân của mình cho bất kỳ mục đích nào và theo cách thức được quy định bên trên vào bất kỳ thời điểm nào.<br>\r\n<br>\r\n4.2. Xin lưu ý rằng nếu Quý Khách thông báo việc thu hồi việc cho phép chúng tôi sử dụng, tiết lộ, lưu trữ hoặc xử lý dữ liệu cá nhân của Quý Khách cho những mục đích và theo cách thức được quy định trên đây, chúng tôi sẽ có thể không thể tiếp tục cung cấp Dịch Vụ cho Quý Khách hoặc thực hiện bất kỳ hợp đồng nào giữa chúng tôi và Quý Khách và chúng tôi sẽ không chịu trách nhiệm trong trường hợp chúng tôi không thể tiếp tục cung cấp Dịch Vụ hoặc thực hiện hợp đồng với Quý Khách. Quyền pháp lý và các biện pháp khắc phục của chúng tôi, một cách cụ thể, được bảo lưu trong trường hợp này.<br>\r\n<br>\r\n5. Phương Pháp Cập Nhật Dữ Liệu Cá Nhân Của Quý Khách<br>\r\n<br>\r\n5.1. Lưu ý rằng dữ liệu cá nhân Quý Khách cung cấp cho chúng tôi phải chính xác và đầy đủ để Quý Khách tiếp tục sử dụng Nền Tảng và để chúng tôi cung cấp Dịch Vụ cho Quý Khách. Quý Khách chịu trách nhiệm thông báo cho chúng tôi về các thay đổi đối với dữ liệu cá nhân của Quý Khách hoặc trong trường hợp Quý Khách tin rằng dữ liệu cá nhân chúng tôi có về Quý Khách không chính xác, không đầy đủ, sai lệch hoặc hết hạn.<br>\r\n<br>\r\n5.2. Quý Khách có thể cập nhật dữ liệu cá nhân của mình bất cứ lúc nào bằng cách (i) truy cập tài khoản của Quý Khách trên Nền Tảng và cập nhập dữ liệu cá nhân của mình hoặc (ii) yêu cầu chúng tôi cập nhật<br>\r\n<br>\r\n5.3. Chúng tôi thực hiện các quy trình để chia sẻ các cập nhật dữ liệu cá nhân của Quý Khách với các bên thứ ba và các bên liên kết của chúng tôi, những cá nhân, tổ chức mà chúng tôi đã chia sẻ dữ liệu cá nhân của Quý Khách nếu dữ liệu cá nhân của Quý Khách vẫn cần thiết cho các mục đích nêu trên.<br>\r\n<br>\r\n6. Truy Cập Dữ Liệu Cá Nhân Của Quý Khách<br>\r\n<br>\r\n6.1. Quý Khách có thể yêu cầu thông tin về dữ liệu cá nhân của Quý Khách mà chúng tôi đã thu thập hoặc thắc mắc về cách thức mà dữ liệu cá nhân của Quý Khách được chúng tôi sử dụng, tiết lộ, lưu trữ hoặc xử lý trong vòng một năm qua. Để thuận tiện cho việc xử lý yêu cầu của Quý Khách, chúng tôi có thể cần phải yêu cầu thêm thông tin liên quan đến yêu cầu của Quý Khách.<br>\r\n<br>\r\n6.2. Chúng tôi bảo lưu quyền tính những chi phí vận hành hợp lý để truy xuất hồ sơ dữ liệu cá nhân của Quý Khách. Trong trường hợp đó, chúng tôi sẽ thông báo cho Quý Khách về chi phí trước khi xử lý yêu cầu của Quý Khách.<br>\r\n<br>\r\n6.3. Chúng tôi sẽ trả lời yêu cầu của Quý Khách trong thời gian sớm nhất có thể. Nếu chúng tôi không thể trả lời yêu cầu của Quý Khách trong vòng hai mươi mốt (21) ngày kể từ ngày Quý Khách yêu cầu, chúng tôi sẽ thông báo cho Quý Khách bằng văn bản. Nếu chúng tôi không thể cung cấp cho Quý Khách bất kỳ dữ liệu cá nhân nào hoặc thực hiện chỉnh sửa theo yêu cầu của Quý Khách, chúng tôi sẽ thông báo cho Quý Khách về lý do tại sao chúng tôi không thể thực hiện được (trừ trường hợp chúng tôi không bắt buộc phải thực hiện theo quy định về bảo vệ dữ liệu của pháp luật hiện hành).<br>\r\n<br>\r\n7. Bảo Mật Dữ Liệu Cá Nhân Của Quý Khách<br>\r\n<br>\r\n7.1. Để bảo vệ dữ liệu cá nhân của Quý Khách khỏi sự truy cập, thu thập, sử dụng, tiết lộ, xử lý, sao chép, sửa đổi, xử lý, làm mất, lạm dụng hoặc rủi ro tương tự, chúng tôi áp dụng các biện pháp vận hành, vật lý và kỹ thuật phù hợp như:<br>\r\n<br>\r\na. Hạn chế quyền truy cập vào dữ liệu cá nhân đối với các cá nhân yêu cầu quyền truy cập;<br>\r\n<br>\r\nb. Bảo trì các sản phẩm công nghệ để ngăn chặn truy cập máy tính trái phép; và<br>\r\n<br>\r\nc. Sử dụng công nghệ mã hóa SSL (lớp ổ cắm bảo mật) 128 bit khi xử lý các thông tin tài chính của Quý Khách.<br>\r\n<br>\r\n7.2. Nếu Quý Khách tin rằng quyền riêng tư của Quý Khách đã bị Lazada xâm phạm, vui lòng liên hệ với chúng tôi ngay lập tức.<br>\r\n<br>\r\n7.3. Tuy nhiên, Quý Khách cần lưu ý rằng không có phương thức truyền tin qua internet hoặc phương pháp lưu trữ điện tử nào là an toàn tuyệt đối. Mặc dù việc bảo mật không thể được đảm bảo tuyệt đối, chúng tôi sẽ luôn nỗ lực bảo mật của thông tin của Quý Khách và liên tục kiểm tra và tăng cường các biện pháp bảo mật thông tin của chúng tôi.<br>\r\n<br>\r\n7.4. Mật khẩu của Quý Khách là chìa khóa cho tài khoản của Quý Khách. Vui lòng sử dụng số, chữ cái và ký tự đặc biệt và không chia sẻ mật khẩu Lazada của Quý Khách với bất kỳ ai. Nếu Quý Khách chia sẻ mật khẩu của mình với người khác, Quý Khách sẽ chịu trách nhiệm cho tất cả các hành động được thực hiện dưới tên tài khoản của Quý Khách và các hậu quả từ các hoạt động đó. Nếu Quý Khách mất quyền kiểm soát mật khẩu của mình, Quý Khách có thể mất quyền kiểm soát đáng kể đối với dữ liệu cá nhân của mình và các dữ liệu khác được gửi tới Lazada. Quý Khách cũng có thể là đối tượng phải chịu các trách nhiệm ràng buộc về mặt pháp lý do những hành vi đã được thực hiện nhân danh Quý Khách. Do đó, nếu mật khẩu của Quý Khách đã bị xâm phạm vì bất kỳ lý do nào hoặc nếu Quý Khách có cơ sở để tin rằng mật khẩu của Quý Khách đã bị xâm phạm, Quý Khách nên liên hệ ngay với chúng tôi và thay đổi mật khẩu của mình. Quý Khách được nhắc đăng xuất khỏi tài khoản của mình và đóng trình duyệt khi Quý Khách kết thúc việc sử dụng máy tính dùng chung.<br>\r\n<br>\r\n8. Thời Gian Lưu Giữ Dữ Liệu Cá Nhân<br>\r\n<br>\r\n8.1. Không ảnh hưởng đến các quy định khác của Chính Sách này, dữ liệu cá nhân của Quý Khách sẽ được lưu trữ cho đến khi Quý Khách yêu cầu xóa dữ liệu cá nhân của Quý Khách và/hoặc Quý Khách xóa vĩnh viễn tài khoản Lazada của Quý Khách.<br>\r\n<br>\r\n8.2. Chúng tôi sẽ chỉ giữ lại dữ liệu cá nhân của Quý Khách trong thời hạn do pháp luật yêu cầu hoặc cho đến khi còn có liên quan đến các mục đích mà dữ liệu đó được thu thập.<br>\r\n<br>\r\n8.3. Chúng tôi sẽ ngừng lưu giữ dữ liệu cá nhân của Quý Khách hoặc xóa phương tiện mà dữ liệu có thể được liên kết với Quý Khách, ngay khi có cơ sở hợp lý tin rằng việc lưu giữ đó không còn phục vụ cho mục đích mà dữ liệu cá nhân đó được thu thập và không còn cần thiết cho bất kỳ mục đích pháp lý hoặc kinh doanh nào.<br>\r\n<br>\r\n9. Người Vị Thành Niên<br>\r\n<br>\r\n9.1. Lazada không bán sản phẩm để mua bán cho người vị thành niên (được xác định dựa trên luật hiện hành) và cũng không có ý định cung cấp bất kỳ Dịch Vụ nào hoặc việc sử dụng Nền Tảng cho người chưa thành niên. Chúng tôi không cố tình thu thập bất kỳ dữ liệu cá nhân nào liên quan đến trẻ vị thành niên.<br>\r\n<br>\r\n9.2. Quý Khách xác nhận và bảo đảm rằng Quý Khách trên độ tuổi vị thành niên và Quý Khách có khả năng hiểu và chấp nhận các điều khoản của Chính Sách Bảo Mật này. Nếu Quý Khách là trẻ vị thành niên, Quý Khách chỉ có thể sử dụng Nền Tảng của chúng tôi với sự tham gia của cha mẹ hoặc người giám hộ.<br>\r\n<br>\r\n9.3. Là cha mẹ hoặc người giám hộ hợp pháp, vui lòng không cho phép trẻ vị thành niên dưới sự chăm sóc của mình gửi dữ liệu cá nhân đến Lazada. Trong trường hợp dữ liệu cá nhân của trẻ vị thành niên được tiết lộ cho Lazada, Quý Khách đồng ý với việc xử lý dữ liệu cá nhân của trẻ vị thành niên, đồng thời chấp nhận và đồng ý chịu ràng buộc bởi Chính Sách Bảo Mật này và chịu trách nhiệm về hành động của trẻ vị thành niên đó.<br>\r\n<br>\r\n9.4. Chúng tôi sẽ không chịu trách nhiệm cho bất kỳ việc sử dụng trái phép Dịch Vụ nào trên Nền Tảng được thực hiện bởi Quý Khách, người dùng thay mặt Quý Khách hoặc bất kỳ người dùng trái phép nào. Quý Khách có trách nhiệm tự đưa ra quyết định cụ thể về việc sử dụng Dịch Vụ trên Nền Tảng và thực hiện các bước cần thiết để ngăn chặn mọi hành vi sử dụng Dịch Vụ sai trái trên Nền Tảng.<br>\r\n<br>\r\n10. Thu Thập Dữ Liệu Máy Tính<br>\r\n<br>\r\n10.1. Chúng tôi hoặc nhà cung cấp Dịch Vụ được ủy quyền của chúng tôi có thể sử dụng cookie, đèn hiệu web (web beacon) và các công nghệ tương tự khác để lưu trữ dữ liệu vì mục đích cung cấp cho Quý Khách trải nghiệm tốt hơn, nhanh hơn, an toàn hơn và được cá nhân hóa khi Quý Khách sử dụng Dịch Vụ hoặc truy cập Nền Tảng.<br>\r\n<br>\r\n10.2. Khi Quý Khách truy cập Nền Tảng thông qua máy tính, thiết bị di động hoặc bất kỳ thiết bị nào khác có kết nối internet, máy chủ của công ty chúng tôi sẽ tự động ghi lại dữ liệu mà trình duyệt của Quý Khách gửi bất cứ khi nào Quý Khách truy cập trang web. Dữ liệu này có thể bao gồm:<br>\r\n<br>\r\na. Địa chỉ IP của máy tính hoặc thiết bị của Quý Khách;<br>\r\n<br>\r\nb. Loại trình duyệt;<br>\r\n<br>\r\nc. Trang web Quý Khách đang truy cập trước khi Quý Khách đến Nền Tảng;<br>\r\n<br>\r\nd. Các trang trong Nền Tảng mà Quý Khách truy cập; và<br>\r\n<br>\r\ne. Thời gian lưu lại trên các trang, hạng mục và dữ liệu được tìm kiếm trên Nền Tảng, thời gian truy cập và ngày và các số liệu thống kê khác.<br>\r\n<br>\r\n10.3. Dữ liệu này được thu thập để phân tích và đánh giá nhằm giúp chúng tôi cải thiện trang web của mình cũng như các Dịch Vụ và Sản Phẩm mà chúng tôi cung cấp.<br>\r\n<br>\r\n10.4. Cookies là các tệp văn bản nhỏ (thường được tạo thành từ các chữ cái và số) được đặt trong bộ nhớ của trình duyệt hoặc thiết bị của Quý Khách khi Quý Khách truy cập trang web hoặc xem tin nhắn. Chúng cho phép chúng tôi nhận ra một thiết bị hoặc trình duyệt cụ thể và giúp chúng tôi cá nhân hóa nội dung để phù hợp với sở thích ưa thích của Quý Khách nhanh hơn và giúp Dịch Vụ và Nền Tảng thuận tiện và hữu ích hơn cho Quý Khách.<br>\r\n<br>\r\n10.5. Quý Khách có thể quản lý và xóa cookie thông qua cài đặt trình duyệt hoặc thiết bị của Quý Khách. Để biết thêm thông tin về cách thực hiện, hãy truy cập tài liệu trợ giúp của trình duyệt hoặc thiết bị của Quý Khách.<br>\r\n<br>\r\n10.6. Đèn hiệu web (web beacon) là hình ảnh đồ họa nhỏ có thể được đưa vào Dịch Vụ và Nền Tảng của chúng tôi. Chúng cho phép chúng tôi đếm những người dùng đã xem những trang này để chúng tôi có thể hiểu rõ hơn về sở thích và sở thích của Quý Khách.<br>\r\n<br>\r\n11. Quyền Của Lazada Trong Việc Tiết Lộ Thông Tin Cá Nhân<br>\r\n<br>\r\n11.1. QUÝ KHÁCH XÁC NHẬN VÀ CHẤP THUẬN RẰNG LAZADA CÓ QUYỀN TIẾT LỘ THÔNG TIN CÁ NHÂN CỦA QUÝ KHÁCH CHO BẤT KỲ CƠ QUAN PHÁP LÝ, CƠ QUAN QUẢN LÝ NHÀ NƯỚC, CƠ QUAN CHÍNH PHỦ, CƠ QUAN THUẾ HOẶC CƠ QUAN THỰC THI PHÁP LUẬT HOẶC BẤT KỲ CƠ QUAN KHÁC HOẶC CÁC CHỦ SỞ HỮU CÓ THẨM QUYỀN LIÊN QUAN NẾU LAZADA CÓ CƠ SỞ HỢP LÝ ĐỂ TIN RẰNG VIỆC TIẾT LỘ THÔNG TIN CÁ NHÂN CỦA QUÝ KHÁCH LÀ CẦN THIẾT ĐỂ THỰC HIỆN BẤT KỲ NGHĨA VỤ, YÊU CẦU HOẶC THỎA THUẬN, BẤT KỂ LÀ TỰ NGUYỆN HOẶC BẮT BUỘC, ĐƯỢC XEM NHƯ LÀ KẾT QUẢ CỦA VIỆC HỢP TÁC THEO LỆNH, ĐIỀU TRA VÀ/HOẶC YÊU CẦU THEO THẨM QUYỀN CỦA BẤT KỲ CÁC CƠ QUAN NÀY. TRONG PHẠM VI PHÁT LUẬT CHO PHÉP, TRONG MỌI TRƯỜNG HỢP, QUÝ KHÁCH ĐỒNG Ý KHÔNG THỰC HIỆN BẤT KỲ HÀNH ĐỘNG VÀ/HOẶC TỪ BỎ QUYỀN THỰC HIỆN BẤT KỲ HÀNH ĐỘNG NÀO CHỐNG LẠI LAZADA LIÊN QUAN ĐẾN VIỆC TIẾT LỘ THÔNG TIN CÁ NHÂN TRONG NHỮNG TRƯỜNG HỢP NÀY.<br>\r\n<br>\r\n12. Trang Web Của Bên Thứ Ba<br>\r\n<br>\r\n12.1. Nền Tảng có thể chứa các liên kết đến các trang web khác được điều hành bởi các bên khác, chẳng hạn như các bên liên kết kinh doanh, thương nhân hoặc cổng thanh toán của chúng tôi. Chúng tôi không chịu trách nhiệm đối với các hoạt động bảo mật của các trang web được điều hành bởi các bên khác. Quý Khách nên kiểm tra các chính sách bảo mật hiện hành của các trang web đó để xác định cách họ sẽ xử lý bất kỳ thông tin nào họ thu thập từ Quý Khách.<br>\r\n<br>\r\n13. Đơn Vị Thu Thập Và Quản Lý Dữ Liệu Cá Nhân<br>\r\n<br>\r\nCông ty TNHH Recess, nhà điều hành của Nền tảng được thành lập và hoạt động theo pháp luật Việt Nam với Mã Số Doanh Nghiệp là: 0308808576<br>\r\n<br>\r\nĐịa chỉ: Tầng 19, Sai Gon Centre - Tháp 2, Phường Bến Nghé, Quận 1, Thành phố Hồ Chí Minh<br>\r\n<br>\r\nĐiện thoại: 1900-1007<br>\r\n<br>\r\nEmail: legal@lazada.vn<br>\r\n<br>\r\n14. Câu Hỏi, Phản Hồi, Thắc Mắc, Kiến Nghị Hoặc Khiếu Nại<br>\r\n<br>\r\n14.1. Nếu Quý Khách có bất kỳ câu hỏi nào về bảo mật dữ liệu cá nhân hoặc quyền riêng tư về dữ liệu, vui lòng tham khảo danh sách các câu hỏi thường gặp của chúng tôi về bảo mật thông tin và quyền riêng tư dữ liệu.<br>\r\n<br>\r\n14.2. Nếu câu hỏi của Quý Khách không thuộc những Câu hỏi thường gặp của chúng tôi (FAQs) hoặc nếu Quý Khách có bất kỳ phản hồi, thắc mắc, kiến nghị hoặc khiếu nại nào liên quan đến dữ liệu cá nhân, vui lòng liên hệ với chúng tôi tại 1900-1007.<br>\r\n<br>\r\nĐể tham khảo phiên bản trước của Chính sách quyền riêng tư, vui lòng bấm vào đây .<br>\r\n<br>\r\nPhiên bản này có hiệu lực vào ngày 26 tháng 5 năm 2020.');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet`
--

CREATE TABLE `chi_tiet` (
  `id` int(11) NOT NULL,
  `masp` int(11) DEFAULT NULL,
  `hang_san_xuat` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thong_tin_them` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hoadon` int(11) NOT NULL,
  `cmnd` char(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkh` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `xa_phuong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quan_huyen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tinh_tp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sp_mua` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_mua` timestamp NULL DEFAULT current_timestamp(),
  `xu_ly` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hoadon`, `cmnd`, `tenkh`, `email`, `sdt`, `dia_chi`, `xa_phuong`, `quan_huyen`, `tinh_tp`, `sp_mua`, `ngay_mua`, `xu_ly`) VALUES
(5, '24563899', 'admin', 'admin@gmail.com', '0966710265', 'abcd', '21547', '536', '51', '14,1,9860000|', '2016-11-08 07:02:06', 'Đã xữ lý'),
(6, '24563899', 'admin', 'admin@gmail.com', '0966710265', 'abcd', '01780', '052', '04', '14,1,9860000|', '2016-11-08 07:06:06', 'Chưa'),
(7, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An', '20821', '513', '49', '14,6,9860000|', '2016-11-08 09:07:53', 'Chưa'),
(10, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An', '20821', '513', '49', '3,2,11690000|15,2,12480000|16,1,14580000|17,1,22469000|19,1,14480000|', '2016-11-08 14:14:06', 'Chưa'),
(11, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An', '20821', '513', '49', '3,1,11690000|14,1,9860000|15,1,12480000|16,1,14580000|', '2016-11-08 14:14:46', 'Chưa'),
(13, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An', '20821', '513', '49', '15,2,12480000|17,2,22469000|', '2016-11-08 14:33:26', 'Chưa'),
(14, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An', '20821', '513', '49', '3,1,11690000|', '2016-11-08 14:33:43', 'Chưa'),
(15, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An', '20821', '513', '49', '14,1,9860000|', '2016-11-08 14:33:56', 'Chưa'),
(16, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An', '20821', '513', '49', '3,1,11690000|', '2016-11-08 14:35:06', 'Chưa'),
(17, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An', '20821', '513', '49', '14,1,9860000|', '2016-11-08 14:44:23', 'Chưa'),
(18, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An', '20821', '513', '49', '15,1,12480000|', '2016-11-08 14:46:42', 'Chưa'),
(19, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An', '20821', '513', '49', '3,1,11690000|', '2016-11-08 15:09:02', 'Chưa'),
(20, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An', '20821', '513', '49', '14,1,9860000|', '2016-11-08 16:05:00', 'Chưa'),
(21, '123456789', 'admin', 'admin@gmail.com', '0123456789', 'abcd, Xã Bình Định Bắc, Huyện Thăng Bình, Tỉnh Quảng Nam', '', '', '', '16,1,14580000|', '2016-11-09 06:57:43', 'Chưa'),
(22, '123456789', 'admin', 'admin@gmail.com', '0123456789', 'abcd, Xã Bình Định Bắc, Huyện Thăng Bình, Tỉnh Quảng Nam', '', '', '', '16,1,14580000|', '2016-11-09 06:58:40', 'Chưa'),
(23, '123456789', 'admin', 'admin@gmail.com', '0123456789', 'abcd, Xã Bình Định Bắc, Huyện Thăng Bình, Tỉnh Quảng Nam', '', '', '', '14,1,9860000|', '2016-11-09 06:59:31', 'Chưa'),
(24, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An, Xã Bình Định Bắc, Huyện Thăng Bình, Tỉnh Quảng Nam', '', '', '', '3,1,11690000|14,1,9860000|', '2016-11-09 07:03:12', 'Chưa'),
(25, '24563899', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An', '', '', '', '3,1,11690000|14,2,9860000|', '2016-11-09 07:34:21', 'Chưa'),
(26, '24563899', 'admin', 'admin@gmail.com', '0966710265', 'abcd, Xã Đồng Ích, Huyện Lập Thạch, Tỉnh Vĩnh Phúc', '', '', '', '15,1,12480000|', '2016-11-09 07:38:06', 'Chưa'),
(27, '24563899', 'admin2', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An, Xã Bình Định Bắc, Huyện Thăng Bình, Tỉnh Quảng Nam', '', '', '', '15,1,12480000|', '2016-11-26 12:13:08', 'Chưa'),
(28, 'admin', 'admin', 'a@gmail.com', '0966710265', 'Tổ 1, thôn Bình An, Xã Sơn Đà, Huyện Ba Vì, Thành Phố Hà Nội', '', '', '', '14,1,9860000|15,1,12480000|', '2016-11-26 12:38:40', 'Chưa'),
(29, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An, Xã Bình Định Bắc, Huyện Thăng Bình, Tỉnh Quảng Nam', '', '', '', '14,1,9860000|15,1,12480000|', '2016-11-26 12:42:12', 'Chưa'),
(30, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An, Xã Bình Định Bắc, Huyện Thăng Bình, Tỉnh Quảng Nam', '', '', '', '14,1,9860000|15,1,12480000|', '2016-11-26 12:43:49', 'Chưa'),
(31, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An, Xã Bình Định Bắc, Huyện Thăng Bình, Tỉnh Quảng Nam', '', '', '', '14,1,9860000|15,1,12480000|', '2016-11-26 12:44:17', 'Chưa'),
(32, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An, Xã Bình Định Bắc, Huyện Thăng Bình, Tỉnh Quảng Nam', '', '', '', '14,1,9860000|15,1,12480000|', '2016-11-26 12:46:51', 'Chưa'),
(33, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An, Xã Bình Định Bắc, Huyện Thăng Bình, Tỉnh Quảng Nam', '', '', '', '14,1,9860000|15,1,12480000|', '2016-11-26 12:53:22', 'Chưa'),
(34, '206014616', 'Trà Tấn Hiệu', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An, Xã Bình Định Bắc, Huyện Thăng Bình, Tỉnh Quảng Nam', '', '', '', '14,1,9860000|15,1,12480000|', '2016-11-26 12:54:32', 'Chưa'),
(35, '123456789', 'Phan Văn Vinh', 'boysociu@admin.com', '0123456789', 'abcd, Xã Bình Lãnh, Huyện Thăng Bình, Tỉnh Quảng Nam', '', '', '', '14,1,280000|15,1,520000|', '2016-12-03 07:26:19', 'Chưa'),
(36, '123456789', 'Trương Thị Hồng Phúc', 'hongphuc@gmail.com', '123456789', 'abcd, Xã Bình Trị, Huyện Thăng Bình, Tỉnh Quảng Nam', '', '', '', '15,1,12690000|', '2016-12-03 07:41:58', 'Chưa'),
(43, '43234234', 'Pham Van Truc', 'truckt12a3@gmail.com', '0378912345', '22 Ho Bieu Chanh', '', '', '', '17,1,7686786|', '2020-05-26 13:29:18', 'Chưa'),
(46, '43234234', 'Pham Van Truc', 'truckt12a3@gmail.com', '0378912345', '22 Ho Bieu Chanh', '', '', '', '2,1,11231231|', '2020-05-26 13:32:49', 'Chưa'),
(47, '43234234', 'Pham Van Truc', 'truckt12a3@gmail.com', '0378912345', '22 Ho Bieu Chanh', '', '', '', '1,1,12312312|', '2020-05-26 13:36:14', 'Chưa'),
(51, '43234234', 'Pham Van Truc', 'truckt12a3@gmail.com', '0378912345', '22 Ho Bieu Chanh', '', '', '', '2,1,11231231|', '2020-05-26 13:44:02', 'Chưa');

-- --------------------------------------------------------

--
-- Table structure for table `menu_ngang`
--

CREATE TABLE `menu_ngang` (
  `id` int(11) NOT NULL,
  `title` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaimenu` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_ngang`
--

INSERT INTO `menu_ngang` (`id`, `title`, `content`, `loaimenu`) VALUES
(1, 'CPU', 'cpu_qc.png', 'cpu'),
(2, 'Tai nghe', 'tai_nghes_qc.png', 'tainghe'),
(3, 'Chuột', 'chuot_qc.jpg', 'chuot'),
(4, 'Tay cầm', 'tay_cam_qc.jpg', 'taycam'),
(5, 'Lót chuột', 'lot_chuot-1_1.jpg', 'lotchuot'),
(6, 'RAM', 'ram_qc.jpg', 'ram'),
(7, 'Màn hình', 'man_hinh_qc.jpg', 'manhinh');

-- --------------------------------------------------------

--
-- Table structure for table `quan_tri`
--

CREATE TABLE `quan_tri` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quyen_truy_cap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quan_tri`
--

INSERT INTO `quan_tri` (`id`, `name`, `pass`, `quyen_truy_cap`) VALUES
(1, 'admin', '03c5842128a80545d17ddded7d19774b', 1),
(2, 'admin2', 'c3284d0f94606de1fd2af172aba15bf3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `masp` int(11) NOT NULL,
  `tensp` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `giasp` int(11) DEFAULT NULL,
  `soluong` int(11) NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img1` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `img2` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `img3` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `img4` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `thongtin` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loaisp` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_bat` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mua_nhieu` int(11) NOT NULL,
  `xem_nhieu` int(11) NOT NULL,
  `rate1` int(11) NOT NULL,
  `rate2` int(11) NOT NULL,
  `rate3` int(11) NOT NULL,
  `rate4` int(11) NOT NULL,
  `rate5` int(11) NOT NULL,
  `chi_tiet_san_pham` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `sale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `moi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mieu_ta` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nha_sx` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`masp`, `tensp`, `giasp`, `soluong`, `img`, `img1`, `img2`, `img3`, `img4`, `thongtin`, `loaisp`, `noi_bat`, `mua_nhieu`, `xem_nhieu`, `rate1`, `rate2`, `rate3`, `rate4`, `rate5`, `chi_tiet_san_pham`, `sale`, `moi`, `mieu_ta`, `nha_sx`) VALUES
(1, 'CPU 111', 12312312, 10, 'cpu_amd_1.jpg', 'cpu_amd_3.jpg', 'cpu_amd_1.jpg', 'cpu_amd_3.jpg', 'cpu_amd_1.jpg', 'qe', 'cpu', 'co', 646, 3123, 423, 24234, 34, 5353, 3121, 'AAAAAAA', '15', 'ko', 'add', 'SAMSUNG'),
(2, 'CPU 222', 11231231, 20, 'cpu_amd_3.jpg', 'cpu_amd_1.jpg', 'cpu_amd_3.jpg', 'cpu_amd_1.jpg', 'cpu_amd_3.jpg', 'qwee', 'cpu', 'ko', 347, 123131, 23, 234, 23, 34, 1314, 'AAAAAAAAAAAAC', '20', 'co', 'adad', 'INTEL'),
(3, 'CPU 333', 3242345, 30, 'cpu_amd_4.jpg', 'cpu_amd_5.jpg', 'cpu_amd_4.jpg', 'cpu_amd_5.jpg', 'cpu_amd_4.jpg', 'qeq', 'cpu', 'ko', 65, 13123, 34, 2, 42, 45, 23423, 'CACDASD', '40', 'ko', 'weqwe', 'SAMSUNG'),
(4, 'CPU 444', 25233423, 40, 'cpu_amd_5.jpg', 'cpu_amd_4.jpg', 'cpu_amd_5.jpg', 'cpu_amd_4.jpg', 'cpu_amd_5.jpg', 'qeq', 'cpu', 'co', 6, 131, 2, 34, 34, 53, 23423, 'ÁDASDASD', '90', 'co', 'adasd', 'AMD'),
(5, 'TAI NGHE 111', 2525346, 50, 'tai_nghe_2.jpg', 'tai_nghe_qc.jpg', 'tai_nghe_2.jpg', 'tai_nghe_qc.jpg', 'tai_nghe_2.jpg', 'qeq', 'tainghe', 'co', 56, 41231, 234, 234, 23, 3, 25234, 'ADADAD', '', 'ko', 'eqweqw', 'SAMSUNG'),
(6, 'TAI NGHE 222', 5645232, 60, 'tai_nghe_qc.jpg', 'tai_nghe_2.jpg', 'tai_nghe_qc.jpg', 'tai_nghe_2.jpg', 'tai_nghe_qc.jpg', 'e', 'tainghe', 'ko', 634, 1113, 34, 2, 42, 345, 25234, 'ÀEDASSDA', '', 'ko', 'q', 'SAMSUNG'),
(7, 'TAI NGHE 333', 4563452, 244, 'tai_nghe_2.jpg', 'tai_nghe_qc.jpg', 'tai_nghe_2.jpg', 'tai_nghe_qc.jpg', 'tai_nghe_2.jpg', 'qe', 'tainghe', 'co', 45, 3123, 2, 34, 34, 5, 2, 'ADADASD', '99', 'ko', 'we', 'RYZEN'),
(8, 'TAI NGHE 444', 9678678, 24234, 'tai_nghe_qc.jpg', 'tai_nghe_2.jpg', 'tai_nghe_qc.jpg', 'tai_nghe_2.jpg', 'tai_nghe_qc.jpg', 'qwe', 'tainghe', 'co', 6, 1413, 34, 23, 2, 3, 342, 'ADASD', '', 'co', 'qw', 'SAMSUNG'),
(9, 'CHUỘT 111', 3453453, 2421, 'chuot_11.jpg', 'chuot_qc.jpg', 'chuot_11.jpg', 'chuot_qc.jpg', 'chuot_11.jpg', 'q', 'chuot', 'co', 3445, 4234, 2, 42, 42, 345, 4, 'SFADASD', '', 'ko', 'eq', 'AMD'),
(10, 'CHUỘT 222', 3453453, 131, 'chuot_qc.jpg', 'chuot_11.jpg', 'chuot_qc.jpg', 'chuot_11.jpg', 'chuot_qc.jpg', 'weq', 'chuot', 'co', 5, 24234, 34, 34, 4, 5, 24, 'WEQWE', '60', 'ko', 'we', 'SAMSUNG'),
(11, 'CHUỘT 333', 3123126, 131, 'chuot_11.jpg', 'chuot_qc.jpg', 'chuot_11.jpg', 'chuot_qc.jpg', 'chuot_11.jpg', 'e', 'chuot', 'ko', 74, 11331, 2, 23, 23, 3, 2, 'QEQWE', '', 'co', 'qw', 'AMD'),
(12, 'CHUỘT 444', 1231231, 4534, 'chuot_qc.jpg', 'chuot_11.jpg', 'chuot_qc.jpg', 'chuot_11.jpg', 'chuot_qc.jpg', 'q', 'chuot', 'co', 45, 141231, 34, 42, 42, 3, 4, 'TWERWER', '', 'ko', 'eq', 'SAMSUNG'),
(13, 'TAY CẦM 111', 6967965, 4563, 'tay_cam_qc.jpg', 'tay_cam_qc.jpg', 'tay_cam_qc.jpg', 'tay_cam_qc.jpg', 'tay_cam_qc.jpg', 'qe', 'taycam', 'co', 56, 23423, 2, 4, 4, 35, 23, 'ERTERT', '', 'ko', 'we', 'AMD'),
(14, 'TAY CẦM 222', 7657567, 4234, 'tay_cam_qc.jpg', 'tay_cam_qc.jpg', 'tay_cam_qc.jpg', 'tay_cam_qc.jpg', 'tay_cam_qc.jpg', 'qe', 'taycam', 'ko', 4, 2424, 34, 234, 2, 5, 42, 'ETGERG', '', 'co', 'qw', 'SAMSUNG'),
(15, 'TAY CẦM 333', 5685675, 2534, 'tay_cam_qc.jpg', 'tay_cam_qc.jpg', 'tay_cam_qc.jpg', 'tay_cam_qc.jpg', 'tay_cam_qc.jpg', 'qe', 'taycam', 'co', 56, 4645, 42, 2, 34, 34, 4, 'ETERTE', '', 'ko', 'eq', 'RYZEN'),
(16, 'TAY CẦM 444', 3563453, 113, 'tay_cam_qc.jpg', 'tay_cam_qc.jpg', 'tay_cam_qc.jpg', 'tay_cam_qc.jpg', 'tay_cam_qc.jpg', 'q', 'taycam', 'co', 564, 7567, 23, 34, 234, 353, 24, 'YTRYERT', '', 'ko', 'qwe', 'SAMSUNG'),
(17, 'LÓT CHUỘT 111', 7686786, 22, 'lot_chuot-1.jpg', 'lot_chuot-11.jpg', 'lot_chuot-1.jpg', 'lot_chuot-11.jpg', 'lot_chuot-1.jpg', 'eq', 'lotchuot', 'co', 4, 5645, 234, 234, 2, 5, 234, 'ETERTET', '20', 'co', 'qwe', 'AMD'),
(18, 'LÓT CHUỘT 222', 3534533, 24, 'lot_chuot-11.jpg', 'lot_chuot-1.jpg', 'lot_chuot-11.jpg', 'lot_chuot-1.jpg', 'lot_chuot-11.jpg', 'eq', 'lotchuot', 'ko', 45, 45645, 5, 2, 34, 7, 2, 'ETYRTYET', '', 'ko', 'qw', 'SAMSUNG'),
(19, 'LÓT CHUỘT 333', 5875675, 242, 'lot_chuot-111.jpg', 'lot_chuot-1111.jpg', 'lot_chuot-111.jpg', 'lot_chuot-1111.jpg', 'lot_chuot-111.jpg', 'eqe', 'lotchuot', 'co', 53, 4645, 23, 4, 23, 646, 42, 'WERTWERWE', '10', 'co', 'eq', 'RYZEN'),
(20, 'LÓT CHUỘT 444', 57456456, 24, 'lot_chuot-1111.jpg', 'lot_chuot-111.jpg', 'lot_chuot-1111.jpg', 'lot_chuot-111.jpg', 'lot_chuot-1111.jpg', 'eqe', 'lotchuot', 'co', 34, 47564, 34, 2, 42, 45, 4, 'TEYRTYYTYRY', '', 'co', 'we', 'SAMSUNG'),
(21, 'RAM 111', 89678678, 242, 'ram_ddr4_6.2.jpg', 'ram_trident_6.1.jpg', 'ram_ddr4_6.2.jpg', 'ram_trident_6.1.jpg', 'ram_ddr4_6.2.jpg', 'qe', 'ram', 'co', 5, 46456, 2, 342, 34, 35, 2, 'WWWWWWWWW', '80', 'ko', 'qwe', 'AMD'),
(22, 'RAM 222', 2423424, 2424, 'ram_trident_6.1.jpg', 'ram_ddr4_6.2.jpg', 'ram_trident_6.1.jpg', 'ram_ddr4_6.2.jpg', 'ram_trident_6.1.jpg', 'qe', 'ram', 'ko', 353, 43534, 234, 34, 234, 234, 4, 'RTTTTTTTTTTT', '', 'co', 'q', 'SAMSUNG'),
(23, 'RAM 333', 24234645, 131, 'ram_ddr4_6.2.jpg', 'ram_trident_6.1.jpg', 'ram_ddr4_6.2.jpg', 'ram_trident_6.1.jpg', 'ram_ddr4_6.2.jpg', 'qe', 'ram', 'co', 5, 765765, 34, 24234, 2, 34, 2, 'RRRRRRRRRRRRRRR', '', 'co', 'e', 'RYZEN'),
(24, 'RAM 444', 78567467, 765, 'ram_trident_6.1.jpg', 'ram_ddr4_6.2.jpg', 'ram_trident_6.1.jpg', 'ram_ddr4_6.2.jpg', 'ram_trident_6.1.jpg', 'qe', 'ram', 'ko', 34, 3534, 2, 24, 24, 2, 4, 'YYYYYYYYYYY', '55', 'ko', 'qe', 'RYZEN'),
(25, 'MÀN HÌNH 111', 34534533, 2345, 'man_hinh_qc.jpg', 'man_hinh_qc.jpg', 'man_hinh_qc.jpg', 'man_hinh_qc.jpg', 'man_hinh_qc.jpg', 'qe', 'manhinh', 'co', 5, 2423, 24, 242, 24, 234, 242, 'UUUUUUUUUUUUU', '', 'co', 'qe', 'SAMSUNG'),
(26, 'MÀN HÌNH 222', 3563534, 4667, 'man_hinh_qc.jpg', 'man_hinh_qc.jpg', 'man_hinh_qc.jpg', 'man_hinh_qc.jpg', 'man_hinh_qc.jpg', 'qe', 'manhinh', 'ko', 6345, 4656, 4, 24234, 2, 34, 22, 'WWWWWWWWWW', '99', 'ko', 'qe', 'RYZEN'),
(27, 'MÀN HÌNH 333', 4324233, 577, 'man_hinh_qc.jpg', 'man_hinh_qc.jpg', 'man_hinh_qc.jpg', 'man_hinh_qc.jpg', 'man_hinh_qc.jpg', 'qe', 'manhinh', 'co', 424, 32423, 2, 2423, 424, 2, 44, 'TTTTTTTTTT', '', 'co', 'qe', 'RYZEN'),
(28, 'MÀN HÌNH 444', 2653643, 575, 'man_hinh_qc.jpg', 'man_hinh_qc.jpg', 'man_hinh_qc.jpg', 'man_hinh_qc.jpg', 'man_hinh_qc.jpg', 'qe', 'manhinh', 'ko', 131, 46456, 24, 224, 24, 42, 424, 'WWWWWWWW', '', 'co', 'qeqw', 'SAMSUNG');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `name`, `note`) VALUES
(1, 'banner1.jpg', ''),
(2, 'banner2.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `thanh_vien`
--

CREATE TABLE `thanh_vien` (
  `cmnd` char(9) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` char(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thanh_vien`
--

INSERT INTO `thanh_vien` (`cmnd`, `username`, `password`, `hoten`, `ngaysinh`, `gioitinh`, `email`, `sdt`, `diachi`) VALUES
('123456789', 'admin', 'c3284d0f94606de1fd2af172aba15bf3', 'admin', '1997-10-26', 'Nam', 'admin@gmail.com', '0123456789', 'abcd, Xã Bình Định Bắc, Huyện Thăng Bình, Tỉnh Quảng Nam'),
('123456789', 'hongphuctruong', '70873e8580c9900986939611618d7b1e', 'Trương Thị Hồng Phúc', '1997-01-11', 'Nữ', 'hongphuc@gmail.com', '123456789', 'abcd, Xã Bình Trị, Huyện Thăng Bình, Tỉnh Quảng Nam'),
('205967532', 'vanvinh', '70873e8580c9900986939611618d7b1e', 'Phan Văn Vinh', '1997-05-25', 'Nam', 'boysociu@admin.com', '01676792115', 'Đội 9, thôn 5, Xã Bình Lãnh, Huyện Thăng Bình, Tỉnh Quảng Nam'),
('206014616', 'trahieu97', '4f25ce8ff984e595442f2c43badf6e44', 'Trà Tấn Hiệu', '1997-10-26', 'Nam', 'tratanhieu97@gmail.com', '0966710265', 'Tổ 1, thôn Bình An, Xã Bình Định Bắc, Huyện Thăng Bình, Tỉnh Quảng Nam'),
('43234234', 'truc123456789', '14e1b600b1fd579f47433b88e8d85291', 'Pham Van Truc', '2000-01-01', 'Nam', 'truckt12a3@gmail.com', '0378912345', '22 Ho Bieu Chanh');

-- --------------------------------------------------------

--
-- Table structure for table `thong_tin`
--

CREATE TABLE `thong_tin` (
  `id` int(50) NOT NULL,
  `masp` int(50) DEFAULT NULL,
  `nha_sx` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi_giao_hang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thong_tin`
--

INSERT INTO `thong_tin` (`id`, `masp`, `nha_sx`, `dia_chi_giao_hang`) VALUES
(1, 1, 'AMD', '22 Hồ Biểu Chánh, Quận Hải Châu, Đà Nẵng'),
(2, 2, 'SAMSUNG', '23 Hồ Biểu Chánh, Quận Hải Châu, Đà Nẵng'),
(3, 3, 'INTEL', '24 Hồ Biểu Chánh, Quận Hải Châu, Đà Nẵng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chi_tiet`
--
ALTER TABLE `chi_tiet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hoadon`);

--
-- Indexes for table `menu_ngang`
--
ALTER TABLE `menu_ngang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quan_tri`
--
ALTER TABLE `quan_tri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanh_vien`
--
ALTER TABLE `thanh_vien`
  ADD PRIMARY KEY (`cmnd`,`username`);

--
-- Indexes for table `thong_tin`
--
ALTER TABLE `thong_tin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chi_tiet`
--
ALTER TABLE `chi_tiet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `quan_tri`
--
ALTER TABLE `quan_tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
