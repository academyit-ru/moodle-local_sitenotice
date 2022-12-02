<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * English language file
 * @package local_sitenotice
 * @author  Nathan Nguyen <nathannguyen@catalyst-au.net>
 * @copyright  Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Уведомление на сайте';
$string['cachedef_enabled_notices'] = 'Список включенных уведомлений';
$string['cachedef_notice_view'] = 'Список просмотренных уведомлений';

// Настройки.
$string['setting:settings'] = 'Настройки';
$string['setting:managenotice'] = 'Управлять уведомлением';
$string['setting:enabled'] = 'Включено';
$string['setting:enableddesc'] = 'Включить уведомление о сайте';
$string['setting:allow_update'] = 'Разрешить обновление уведомления';
$string['setting:allow_updatedesc'] = 'Разрешить обновление уведомления';
$string['setting:allow_delete'] = 'Разрешить удаление уведомления';
$string['setting:allow_deletedesc'] = 'Разрешить удаление уведомления';
$string['setting:cleanup_deleted_notice'] = 'Очистить информацию, связанную с удаленным уведомлением';
$string['setting:cleanup_deleted_noticedesc'] = 'Требуется "Разрешить удаление уведомления".
Если включено, другие сведения, связанные с удаляемым уведомлением, такие как гиперссылки, история гиперссылок, подтверждение,
последний просмотр пользователем, также будут удалены';

// Управление уведомлениями.
$string['notice:title'] = 'Заголовок';
$string['notice:content'] = 'Содержимое';
$string['notice:activefrom'] = 'Активен из';
$string['notice:activefrom_help'] = 'Время и дата, с которых сообщение будет активным.';
$string['notice:cohort'] = 'Когорта';
$string['notice:cohort:all'] = 'Все пользователи';
$string['notice:enable'] = 'Включить уведомление';
$string['notice:expiry'] = 'Истечение срока действия';
$string['notice:expiry_help'] = 'Время и дата истечения срока действия сообщений и они больше не будут отображаться пользователям.';
$string['notice:reqack'] = 'Требуется подтверждение';
$string['notice:reqack_help'] = 'Если включено, пользователю необходимо будет принять уведомление, прежде чем он сможет продолжить использовать сайт LMS.
Если пользователь не примет уведомление, он/она будет удален с сайта.';
$string['notice:forcelogout'] = 'Принудительный выход из системы';
$string['notice:forcelogout_help'] = 'Если включено, пользователь выйдет из системы после закрытия уведомления. Этот параметр не влияет на администратора сайта. ';
$string['notice:reqcourse'] = 'Требуется завершение курса';
$string['notice:reqcourse_help'] = 'Если выбрано, пользователь будет видеть уведомление до завершения курса.';
$string['notice:disable'] = 'Отключить уведомление';
$string['notice:create'] = 'Создать новое уведомление';
$string['notice:view'] = 'Уведомление о просмотре';
$string['notice:info'] = 'Информация об уведомлении';
$string['notice:report'] = 'Просмотреть отчет';
$string['notice:reset'] = 'Уведомление о сбросе';
$string['notice:delete'] = 'Уведомление об удалении';
$string['notice:timemodified'] = 'Изменено по времени';
$string['notice:hlinkcount'] = 'Количество гиперссылок';
$string['notice:resetinterval'] = 'Сбрасывать каждый';
$string['notice:resetinterval_help'] = 'Уведомление будет отображено пользователю снова по истечении указанного периода.';
$string['notice:redirectmsg'] = 'Обязательный курс не завершен. Не разрешено отправлять задание';
$string['notice:notice'] = 'Уведомление';
$string['notice:perpetual'] = 'Является бессрочным';
$string['notice:perpetual_help'] = 'Если установлено значение yes, уведомление будет отображаться всегда (если оно не отключено). Если установлено значение нет, необходимо указать диапазон дат и времени для уведомления';

// Возможности.
$string['sitenotice:manage'] = 'Управлять уведомлением о сайте';

// Событие.
$string['event:dismiss'] = 'отклонить';
$string['event:acknowledge'] = 'подтвердить';
$string['event:create'] = 'создать';
$string['event:update'] = 'обновить';
$string['event:reset'] = 'сброс';
$string['event:enable'] = 'включить';
$string['event:disable'] = 'отключить';
$string['event:delete'] = 'удалить';
$string['event:timecreated'] = 'Время';

// Формат времени.
$string['timeformat:resetinterval'] = '%a день(ы), %h час(ы), %i минута(ы) и %s секунда(ы)';
$string['booleanformat:true'] = 'Да';
$string['booleanformat:false'] = 'Нет';

// Конфиденциальность.
$string['privacy:metadata:local_sitenotice_ack'] = 'Подтверждение уведомления';
$string['privacy:metadata:local_sitenotice_hlinks_his'] = 'Отслеживание гиперссылок';
$string['privacy:metadata:local_sitenotice_lastview'] = 'Уведомление о последнем просмотре';
$string['privacy:metadata:userid'] = 'Идентификатор пользователя';
$string['privacy:metadata:username'] = 'Имя пользователя';
$string['privacy:metadata:firstname'] = 'Имя пользователя';
$string['privacy:metadata:lastname'] = 'Фамилия';
$string['privacy:metadata:idnumber'] = 'Идентификационный номер';

// Уведомление.
$string['notification:noack'] = 'Для этого уведомления нет подтверждения';
$string['notification:nodis'] = 'Для этого уведомления нет отмены';
$string['notification:noticedoesnotexist'] = 'Уведомление не существует';
$string['notification:nodeleteallowed'] = 'Удаление уведомления не разрешено';
$string['notification:noupdateallowed'] = 'Обновление уведомления не разрешено';

// Подтверждение.
$string['confirmation:deletenotice'] = 'Вы действительно хотите удалить уведомление "{$a}"';

// Модальные кнопки.
$string['button:close'] = 'Закрыть';
$string['button:accept'] = 'Принять';

// Отчет.
$string['report:button:ack'] = 'Отчет о подтверждении уведомления';
$string['report:button:dis'] = 'Уведомление об отклонении отчета';
$string['report:dismissed'] = 'notice_dismissed_{$a}';
$string['report:dismissed_desc'] = 'Список пользователей, которые отклонили уведомление.';
$string['report:acknowledged'] = 'notice_acknowledged_{$a}';
$string['report:acknowledge_desc'] = 'Список пользователей, которые подтвердили уведомление';
$string['report:timeformat:sortable'] = '%Y-%m-%d %H:%M:%S';
$string['report:timecreated_server'] = 'Серверное время';
$string['report:timecreated_spreadsheet'] = 'Временная метка электронной таблицы';

// Модальный.
$string['modal:checkboxtext'] = 'Я прочитал и понял уведомление (закрытие этого уведомления приведет к удалению вас с этого сайта).';
$string['modal:acceptbtntooltip'] = 'Пожалуйста, установите вышеуказанный флажок.';