<?php
/**
 * Date: 11/06/13
 * Written by: Andrew Mclaughlan
 * Company: SalesAgility
 */

class FP_eventsController extends SugarController
{
    public function action_markasinvited()
    {
        $db = DBManagerFactory::getInstance();

        $ids = $_POST['id'];
        $entire_list = $_POST['entire_list'];
        $event_id = $_POST['event_id'];

        if ($entire_list != '1') {
            $contacts = explode(',', $ids);

            foreach ($contacts as $contact) {
                //update contacts query
                $query = 'UPDATE fp_events_contacts_c SET invite_status="Invited" WHERE fp_events_contactsfp_events_ida="'.$event_id.'" AND fp_events_contactscontacts_idb="'.$contact.'"';
                $res = $db->query($query);
                //update Leads query
                $query2 = 'UPDATE fp_events_leads_1_c SET invite_status="Invited" WHERE fp_events_leads_1fp_events_ida="'.$event_id.'" AND fp_events_leads_1leads_idb="'.$contact.'"';
                $res = $db->query($query2);
                //update targets query
                $query3 = 'UPDATE fp_events_prospects_1_c SET invite_status="Invited" WHERE fp_events_prospects_1fp_events_ida="'.$event_id.'" AND fp_events_prospects_1prospects_idb="'.$contact.'"';
                $res = $db->query($query3);
            }
        } elseif ($entire_list == '1') { //updates all records

            //update contacts query
            $query = 'UPDATE fp_events_contacts_c SET invite_status="Invited" WHERE fp_events_contactsfp_events_ida="'.$event_id.'"';
            $res = $db->query($query);
            //update Leads query
            $query2 = 'UPDATE fp_events_leads_1_c SET invite_status="Invited" WHERE fp_events_leads_1fp_events_ida="'.$event_id.'"';
            $res = $db->query($query2);
            //update targets query
            $query3 = 'UPDATE fp_events_prospects_1_c SET invite_status="Invited" WHERE fp_events_prospects_1fp_events_ida="'.$event_id.'"';
            $res = $db->query($query3);
        }
    }

    public function action_markasattended()
    {
        $db = DBManagerFactory::getInstance();

        $ids = $_POST['id'];
        $entire_list = $_POST['entire_list'];
        $event_id = $_POST['event_id'];

        if ($entire_list != '1') {
            $contacts = explode(',', $ids);

            foreach ($contacts as $contact) {
                $query = 'UPDATE fp_events_contacts_c SET invite_status="Attended" WHERE fp_events_contactsfp_events_ida="'.$event_id.'" AND fp_events_contactscontacts_idb="'.$contact.'"';
                $res = $db->query($query);
                //update Leads query
                $query2 = 'UPDATE fp_events_leads_1_c SET invite_status="Attended" WHERE fp_events_leads_1fp_events_ida="'.$event_id.'" AND fp_events_leads_1leads_idb="'.$contact.'"';
                $res = $db->query($query2);
                //update targets query
                $query3 = 'UPDATE fp_events_prospects_1_c SET invite_status="Attended" WHERE fp_events_prospects_1fp_events_ida="'.$event_id.'" AND fp_events_prospects_1prospects_idb="'.$contact.'"';
                $res = $db->query($query3);
            }
        } elseif ($entire_list == '1') { //updates all records

            //update contacts query
            $query = 'UPDATE fp_events_contacts_c SET invite_status="Attended" WHERE fp_events_contactsfp_events_ida="'.$event_id.'"';
            $res = $db->query($query);
            //update Leads query
            $query2 = 'UPDATE fp_events_leads_1_c SET invite_status="Attended" WHERE fp_events_leads_1fp_events_ida="'.$event_id.'"';
            $res = $db->query($query2);
            //update targets query
            $query3 = 'UPDATE fp_events_prospects_1_c SET invite_status="Attended" WHERE fp_events_prospects_1fp_events_ida="'.$event_id.'"';
            $res = $db->query($query3);
        }
    }

    public function action_markasnotattended()
    {
        $db = DBManagerFactory::getInstance();

        $ids = $_POST['id'];
        $entire_list = $_POST['entire_list'];
        $event_id = $_POST['event_id'];

        if ($entire_list != '1') {
            $contacts = explode(',', $ids);

            foreach ($contacts as $contact) {
                $query = 'UPDATE fp_events_contacts_c SET invite_status="Not Attended" WHERE fp_events_contactsfp_events_ida="'.$event_id.'" AND fp_events_contactscontacts_idb="'.$contact.'"';
                $res = $db->query($query);
                //update Leads query
                $query2 = 'UPDATE fp_events_leads_1_c SET invite_status="Not Attended" WHERE fp_events_leads_1fp_events_ida="'.$event_id.'" AND fp_events_leads_1leads_idb="'.$contact.'"';
                $res = $db->query($query2);
                //update targets query
                $query3 = 'UPDATE fp_events_prospects_1_c SET invite_status="Not Attended" WHERE fp_events_prospects_1fp_events_ida="'.$event_id.'" AND fp_events_prospects_1prospects_idb="'.$contact.'"';
                $res = $db->query($query3);
            }
        } elseif ($entire_list == '1') { //updates all records

            //update contacts query
            $query = 'UPDATE fp_events_contacts_c SET invite_status="Not Attended" WHERE fp_events_contactsfp_events_ida="'.$event_id.'"';
            $res = $db->query($query);
            //update Leads query
            $query2 = 'UPDATE fp_events_leads_1_c SET invite_status="Not Attended" WHERE fp_events_leads_1fp_events_ida="'.$event_id.'"';
            $res = $db->query($query2);
            //update targets query
            $query3 = 'UPDATE fp_events_prospects_1_c SET invite_status="Not Attended" WHERE fp_events_prospects_1fp_events_ida="'.$event_id.'"';
            $res = $db->query($query3);
        }
    }

    public function action_markasnotinvited()
    {
        $db = DBManagerFactory::getInstance();

        $ids = $_POST['id'];
        $entire_list = $_POST['entire_list'];
        $event_id = $_POST['event_id'];

        if ($entire_list != '1') {
            $contacts = explode(',', $ids);

            foreach ($contacts as $contact) {
                $query = 'UPDATE fp_events_contacts_c SET invite_status="Not Invited", email_responded="0" WHERE fp_events_contactsfp_events_ida="'.$event_id.'" AND fp_events_contactscontacts_idb="'.$contact.'"';
                $res = $db->query($query);
                //update Leads query
                $query2 = 'UPDATE fp_events_leads_1_c SET invite_status="Not Invited", email_responded="0" WHERE fp_events_leads_1fp_events_ida="'.$event_id.'" AND fp_events_leads_1leads_idb="'.$contact.'"';
                $res = $db->query($query2);
                //update targets query
                $query3 = 'UPDATE fp_events_prospects_1_c SET invite_status="Not Invited", email_responded="0" WHERE fp_events_prospects_1fp_events_ida="'.$event_id.'" AND fp_events_prospects_1prospects_idb="'.$contact.'"';
                $res = $db->query($query3);
            }
        } elseif ($entire_list == '1') { //updates all records

            //update contacts query
            $query = 'UPDATE fp_events_contacts_c SET invite_status="Not Invited", email_responded="0" WHERE fp_events_contactsfp_events_ida="'.$event_id.'"';
            $res = $db->query($query);
            //update Leads query
            $query2 = 'UPDATE fp_events_leads_1_c SET invite_status="Not Invited", email_responded="0" WHERE fp_events_leads_1fp_events_ida="'.$event_id.'"';
            $res = $db->query($query2);
            //update targets query
            $query3 = 'UPDATE fp_events_prospects_1_c SET invite_status="Not Invited", email_responded="0" WHERE fp_events_prospects_1fp_events_ida="'.$event_id.'"';
            $res = $db->query($query3);
        }
    }

    public function action_markasaccepted()
    {
        $db = DBManagerFactory::getInstance();

        $ids = $_POST['id'];
        $entire_list = $_POST['entire_list'];
        $event_id = $_POST['event_id'];

        if ($entire_list != '1') {
            $contacts = explode(',', $ids);

            foreach ($contacts as $contact) {
                $query = 'UPDATE fp_events_contacts_c SET accept_status="Accepted" WHERE fp_events_contactsfp_events_ida="'.$event_id.'" AND fp_events_contactscontacts_idb="'.$contact.'"';
                $res = $db->query($query);
                //update Leads query
                $query2 = 'UPDATE fp_events_leads_1_c SET accept_status="Accepted" WHERE fp_events_leads_1fp_events_ida="'.$event_id.'" AND fp_events_leads_1leads_idb="'.$contact.'"';
                $res = $db->query($query2);
                //update targets query
                $query3 = 'UPDATE fp_events_prospects_1_c SET accept_status="Accepted" WHERE fp_events_prospects_1fp_events_ida="'.$event_id.'" AND fp_events_prospects_1prospects_idb="'.$contact.'"';
                $res = $db->query($query3);
            }
        } elseif ($entire_list == '1') { //updates all records

            //update contacts query
            $query = 'UPDATE fp_events_contacts_c SET accept_status="Accepted" WHERE fp_events_contactsfp_events_ida="'.$event_id.'"';
            $res = $db->query($query);
            //update Leads query
            $query2 = 'UPDATE fp_events_leads_1_c SET accept_status="Accepted" WHERE fp_events_leads_1fp_events_ida="'.$event_id.'"';
            $res = $db->query($query2);
            //update targets query
            $query3 = 'UPDATE fp_events_prospects_1_c SET accept_status="Accepted" WHERE fp_events_prospects_1fp_events_ida="'.$event_id.'"';
            $res = $db->query($query3);
        }
    }
    public function action_markasdeclined()
    {
        $db = DBManagerFactory::getInstance();

        $ids = $_POST['id'];
        $entire_list = $_POST['entire_list'];
        $event_id = $_POST['event_id'];

        if ($entire_list != '1') {
            $contacts = explode(',', $ids);

            foreach ($contacts as $contact) {
                $query = 'UPDATE fp_events_contacts_c SET accept_status="Declined" WHERE fp_events_contactsfp_events_ida="'.$event_id.'" AND fp_events_contactscontacts_idb="'.$contact.'"';
                $res = $db->query($query);
                //update Leads query
                $query2 = 'UPDATE fp_events_leads_1_c SET accept_status="Declined" WHERE fp_events_leads_1fp_events_ida="'.$event_id.'" AND fp_events_leads_1leads_idb="'.$contact.'"';
                $res = $db->query($query2);
                $res = $db->query($query2);
                //update targets query
                $query3 = 'UPDATE fp_events_prospects_1_c SET accept_status="Declined" WHERE fp_events_prospects_1fp_events_ida="'.$event_id.'" AND fp_events_prospects_1prospects_idb="'.$contact.'"';
                $res = $db->query($query3);
            }
        } elseif ($entire_list == '1') { //updates all records

            //update contacts query
            $query = 'UPDATE fp_events_contacts_c SET accept_status="Declined" WHERE fp_events_contactsfp_events_ida="'.$event_id.'"';
            $res = $db->query($query);
            //update Leads query
            $query2 = 'UPDATE fp_events_leads_1_c SET accept_status="Declined" WHERE fp_events_leads_1fp_events_ida="'.$event_id.'"';
            $res = $db->query($query2);
            //update targets query
            $query3 = 'UPDATE fp_events_prospects_1_c SET accept_status="Declined" WHERE fp_events_prospects_1fp_events_ida="'.$event_id.'"';
            $res = $db->query($query3);
        }
    }

    public function action_add_to_list()
    {
        $ids = $_POST['subpanel_id'];
        $event_id = $_POST['return_id'];
        $type = $_POST['pop_up_type'];


        if (!is_array($ids)) {
            $ids = array($ids);
        }
        //Target lists. Can incliude contacts, leads and targets as part of the target list
        if ($type == 'target_list') {
            foreach ($ids as $list) {
                $event = new FP_events();
                $event->retrieve($event_id);
                $event->load_relationship('fp_events_prospects_1');
                $event->load_relationship('fp_events_contacts');
                $event->load_relationship('fp_events_leads_1');

                $target_list = new ProspectList();
                $target_list->retrieve($list);
                $target_list->load_relationship('prospects');
                $target_list->load_relationship('contacts');
                $target_list->load_relationship('leads');

                //add prospects/targets
                foreach ($target_list->prospects->getBeans() as $contact) {
                    $contact_id_list = $event->fp_events_prospects_1->get();

                    if (!in_array($contact->id, $contact_id_list)) { //check if its already related 

                        $event->fp_events_prospects_1->add($contact->id);
                    }
                }
                //add contacts
                foreach ($target_list->contacts->getBeans() as $contact) {
                    $contact_id_list = $event->fp_events_contacts->get();

                    if (!in_array($contact->id, $contact_id_list)) {
                        $event->fp_events_contacts->add($contact->id);
                    }
                }
                //add leads
                foreach ($target_list->leads->getBeans() as $contact) {
                    $contact_id_list = $event->fp_events_leads_1->get();

                    if (!in_array($contact->id, $contact_id_list)) {
                        $event->fp_events_leads_1->add($contact->id);
                    }
                }
            }
        }
        //Targets
        elseif ($type == 'targets') {
            foreach ($ids as $target) {
                $event = new FP_events();
                $event->retrieve($event_id);
                $event->load_relationship('fp_events_prospects_1');

                $contact_id_list = $event->fp_events_prospects_1->get();//get array of currently linked targets

                if (!in_array($target, $contact_id_list)) { //check if its already in the array

                    $event->fp_events_prospects_1->add($target);//if not add relationship
                }
            }
        }
        //leads
        elseif ($type == 'leads') {
            foreach ($ids as $lead) {
                $event = new FP_events();
                $event->retrieve($event_id);
                $event->load_relationship('fp_events_leads_1');

                $contact_id_list = $event->fp_events_leads_1->get();//get array of currently linked leads

                if (!in_array($lead, $contact_id_list)) { //check if its already in the array

                    $event->fp_events_leads_1->add($lead);//if not add relationship
                }
            }
        }
        //contacts
        elseif ($type == 'contacts') {
            foreach ($ids as $contact) {
                $event = new FP_events();
                $event->retrieve($event_id);
                $event->load_relationship('fp_events_contacts');

                $contact_id_list = $event->fp_events_contacts->get(); //get array of currently linked contacts

                if (!in_array($contact, $contact_id_list)) {
                    $event->fp_events_contacts->add($contact);
                }
            }
        }

        die();
    }

    public function action_sendinvitemails()
    {
        $db = DBManagerFactory::getInstance();
        global $sugar_config;
        global $mod_strings;

        $id = $_GET['record'];
        //get event
        $event = new FP_events();
        $event->retrieve($id);

        $event->load_relationship('fp_events_contacts'); // get related contacts
        $event->load_relationship('fp_events_prospects_1'); //get related targets
        $event->load_relationship('fp_events_leads_1'); //get related leads

        //Count the number of delegates linked to the event that have not yet been invited
        $query = "SELECT * FROM fp_events_contacts_c WHERE fp_events_contactsfp_events_ida='".$event->id."' AND (invite_status='Not Invited' OR invite_status='' OR invite_status IS NULL) AND deleted='0'";
        $result = $db->query($query);
        $contact_count = $db->getRowCount($result);//count contacts

        $query = "SELECT * FROM fp_events_prospects_1_c WHERE fp_events_prospects_1fp_events_ida='".$event->id."' AND (invite_status='Not Invited' OR invite_status='' OR invite_status IS NULL) AND deleted='0'";
        $result = $db->query($query);
        $prospect_count = $db->getRowCount($result);//count targets

        $query = "SELECT * FROM fp_events_leads_1_c WHERE fp_events_leads_1fp_events_ida='".$event->id."' AND (invite_status='Not Invited' OR invite_status='' OR invite_status IS NULL) AND deleted='0'";
        $result = $db->query($query);
        $lead_count = $db->getRowCount($result);//count leads

        $delegate_count = $contact_count + $prospect_count + $lead_count;//Total up delegates 
        $invite_count = 0; //used to count the number of emails sent
        $error_count = 0; //used to count the number of failed email attempts


        //loop through related contacts
        foreach ($event->fp_events_contacts->getBeans() as $contact) {

            //Get accept status of contact
            $query = 'SELECT invite_status FROM fp_events_contacts_c WHERE fp_events_contactsfp_events_ida="'.$event->id.'" AND fp_events_contactscontacts_idb="'.$contact->id.'"';
            $status = $db->getOne($query);

            if ($status == null || $status == '' || $status == 'Not Invited') {
                $invite_count ++;
                //set email links
                $event->link = "<a href='".$sugar_config['site_url']."/index.php?entryPoint=responseEntryPoint&event=".$event->id."&delegate=".$contact->id."&type=c&response=accept'>Accept</a>";
                $event->link_declined = "<a href='".$sugar_config['site_url']."/index.php?entryPoint=responseEntryPoint&event=".$event->id."&delegate=".$contact->id."&type=c&response=decline'>Decline</a>";

                //Get the TO name and e-mail address for the message
                $rcpt_name = $contact->first_name . ' ' . $contact->last_name;
                $rcpt_email = $contact->email1;

                $emailTemp = new EmailTemplate();
                $emailTemp->disable_row_level_security = true;
                $emailTemp->retrieve($event->invite_templates);  //Use the ID value of the email template record

                //check email template is set, if not return error
                if ($emailTemp->id == '') {
                    SugarApplication::appendErrorMessage($mod_strings['LBL_ERROR_MSG_5']);
                    SugarApplication::redirect("index.php?module=FP_events&return_module=FP_events&action=DetailView&record=".$event->id);
                    die();
                }

                //parse the lead varibales first
                $firstpass = $emailTemp->parse_template_bean($emailTemp->body_html, 'Contacts', $contact);

                $email_subject = $emailTemp->parse_template_bean($emailTemp->subject, 'FP_events', $event);
                $email_body = from_html($emailTemp->parse_template_bean($firstpass, 'FP_events', $event));
                $alt_emailbody = wordwrap($emailTemp->parse_template_bean($firstpass, 'FP_events', $event), 900);

                //get attachments
                $attachmentBean = new Note();
                $attachment_list = $attachmentBean->get_full_list('', "parent_type = 'Emails' AND parent_id = '".$event->invite_templates."'");

                $attachments = array();

                if ($attachment_list != null) {
                    foreach ($attachment_list as $attachment) {
                        $attachments[] = $attachment;
                    }
                }

                //send the email
                $send_invite = $this->sendEmail($rcpt_email, $email_subject, $rcpt_name, $email_body, $alt_emailbody, $contact, $attachments);


                //Send the message, log if error occurs
                if (!$send_invite) {
                    $GLOBALS['log']->fatal('ERROR: Invite email failed to send to: '.$rcpt_name.' at '.$rcpt_email);
                    $error_count ++;
                } else {
                    //update contact to invites
                    $query = 'UPDATE fp_events_contacts_c SET invite_status="Invited" WHERE fp_events_contactsfp_events_ida="'.$event->id.'" AND fp_events_contactscontacts_idb="'.$contact->id.'"';
                    $res = $db->query($query);
                }
            }
        }

        //loop through related targets
        foreach ($event->fp_events_prospects_1->getBeans() as $target) {

            //Get accept status of contact
            $query = 'SELECT invite_status FROM fp_events_prospects_1_c WHERE fp_events_prospects_1fp_events_ida="'.$event->id.'" AND fp_events_prospects_1prospects_idb="'.$target->id.'"';
            $status = $db->getOne($query);

            if ($status == null || $status == '' || $status == 'Not Invited') {
                $invite_count ++;

                //set email links
                $event->link = "<a href='".$sugar_config['site_url']."/index.php?entryPoint=responseEntryPoint&event=".$event->id."&delegate=".$target->id."&type=t&response=accept'>Accept</a>";
                $event->link_declined = "<a href='".$sugar_config['site_url']."/index.php?entryPoint=responseEntryPoint&event=".$event->id."&delegate=".$target->id."&type=t&response=decline'>Decline</a>";

                //Get the TO name and e-mail address for the message
                $rcpt_name = $target->first_name . ' ' . $target->last_name;
                $rcpt_email = $target->email1;

                $emailTemp = new EmailTemplate();
                $emailTemp->disable_row_level_security = true;
                $emailTemp->retrieve($event->invite_templates);  //Use the ID value of the email template record

                //parse the lead varibales first
                $firstpass = $emailTemp->parse_template_bean($emailTemp->body_html, 'Contacts', $target);

                $email_subject = $emailTemp->parse_template_bean($emailTemp->subject, 'FP_events', $event);
                $email_body = from_html($emailTemp->parse_template_bean($firstpass, 'FP_events', $event));
                $alt_emailbody = wordwrap($emailTemp->parse_template_bean($firstpass, 'FP_events', $event), 900);

                //get attachments
                $attachmentBean = new Note();
                $attachment_list = $attachmentBean->get_full_list('', "parent_type = 'Emails' AND parent_id = '".$event->invite_templates."'");

                $attachments = array();

                if ($attachment_list != null) {
                    foreach ($attachment_list as $attachment) {
                        $attachments[] = $attachment;
                    }
                }

                //send the email
                $send_invite = $this->sendEmail($rcpt_email, $email_subject, $rcpt_name, $email_body, $alt_emailbody, $target, $attachments);


                //Send the message, log if error occurs
                if (!$send_invite) {
                    $GLOBALS['log']->fatal('ERROR: Invite email failed to send to: '.$rcpt_name.' at '.$rcpt_email);
                    $error_count ++;
                } else {
                    //update contact to invites
                    $query = 'UPDATE fp_events_prospects_1_c SET invite_status="Invited" WHERE fp_events_prospects_1fp_events_ida="'.$event->id.'" AND fp_events_prospects_1prospects_idb="'.$target->id.'"';
                    $res = $db->query($query);
                }
            }
        }

        //loop through related leads
        foreach ($event->fp_events_leads_1->getBeans() as $lead) {

            //Get accept status of contact
            $query = 'SELECT invite_status FROM fp_events_leads_1_c WHERE fp_events_leads_1fp_events_ida="'.$event->id.'" AND fp_events_leads_1leads_idb="'.$lead->id.'"';
            $status = $db->getOne($query);

            if ($status == null || $status == '' || $status == 'Not Invited') {
                $invite_count ++;
                //set email links
                $event->link = "<a href='".$sugar_config['site_url']."/index.php?entryPoint=responseEntryPoint&event=".$event->id."&delegate=".$lead->id."&type=l&response=accept'>Accept</a>";
                $event->link_declined = "<a href='".$sugar_config['site_url']."/index.php?entryPoint=responseEntryPoint&event=".$event->id."&delegate=".$lead->id."&type=l&response=decline'>Decline</a>";

                //Get the TO name and e-mail address for the message
                $rcpt_name = $lead->first_name . ' ' . $lead->last_name;
                $rcpt_email = $lead->email1;

                $emailTemp = new EmailTemplate();
                $emailTemp->disable_row_level_security = true;
                $emailTemp->retrieve($event->invite_templates);  //Use the ID value of the email template record

                //parse the lead varibales first
                $firstpass = $emailTemp->parse_template_bean($emailTemp->body_html, 'Contacts', $lead);

                $email_subject = $emailTemp->parse_template_bean($emailTemp->subject, 'FP_events', $event);
                $email_body = from_html($emailTemp->parse_template_bean($firstpass, 'FP_events', $event));
                $alt_emailbody = wordwrap($emailTemp->parse_template_bean($firstpass, 'FP_events', $event), 900);

                //get attachments
                $attachmentBean = new Note();
                $attachment_list = $attachmentBean->get_full_list('', "parent_type = 'Emails' AND parent_id = '".$event->invite_templates."'");

                $attachments = array();

                if ($attachment_list != null) {
                    foreach ($attachment_list as $attachment) {
                        $attachments[] = $attachment;
                    }
                }

                //send the email
                $send_invite = $this->sendEmail($rcpt_email, $email_subject, $rcpt_name, $email_body, $alt_emailbody, $lead, $attachments);


                //Send the message, log if error occurs
                if (!$send_invite) {
                    $GLOBALS['log']->fatal('ERROR: Invite email failed to send to: '.$rcpt_name.' at '.$rcpt_email);
                    $error_count ++;
                } else {
                    //update contact to invites
                    $query = 'UPDATE fp_events_leads_1_c SET invite_status="Invited" WHERE fp_events_leads_1fp_events_ida="'.$event->id.'" AND fp_events_leads_1leads_idb="'.$lead->id.'"';
                    $res = $db->query($query);
                }
            }
        }
        //Redirect with error message if all linked contacts have already been invited
        if ($invite_count == 0) {
            SugarApplication::appendErrorMessage($mod_strings['LBL_ERROR_MSG_1']);
            SugarApplication::redirect("index.php?module=FP_events&return_module=FP_events&action=DetailView&record=".$event->id);
        }
        //Redirect if all emails fail to send
        if ($error_count == $delegate_count) {
            $_SESSION['user_error_message'] = array();//clear the error message array
            SugarApplication::appendErrorMessage($mod_strings['LBL_ERROR_MSG_2'].$delegate_count);
            SugarApplication::redirect("index.php?module=FP_events&return_module=FP_events&action=DetailView&record=".$event->id);
        } elseif ($error_count > 0 && $error_count <= 10) {//redirect with failed email count.
            $_SESSION['user_error_message'] = array();
            SugarApplication::appendErrorMessage($error_count.$mod_strings['LBL_ERROR_MSG_4']);
            SugarApplication::redirect("index.php?module=FP_events&return_module=FP_events&action=DetailView&record=".$event->id);
        }
        // Redirect with error count if failed email attempts are greater than 10 
        elseif ($error_count > 10) {
            $_SESSION['user_error_message'] = array();
            SugarApplication::appendErrorMessage($mod_strings['LBL_ERROR_MSG_3']);
            SugarApplication::redirect("index.php?module=FP_events&return_module=FP_events&action=DetailView&record=".$event->id);
        } else {
            SugarApplication::appendErrorMessage($mod_strings['LBL_SUCCESS_MSG']);
            SugarApplication::redirect("index.php?module=FP_events&return_module=FP_events&action=DetailView&record=".$event->id);
        }
    }

    //handles sending the emails
    public function sendEmail($emailTo, $emailSubject, $emailToname, $emailBody, $altemailBody, SugarBean $relatedBean = null, $attachments = array())
    {
        $emailObj = new Email();
        $defaults = $emailObj->getSystemDefaultEmail();
        $mail = new SugarPHPMailer();
        $mail->setMailerForSystem();
        $mail->From = $defaults['email'];
        isValidEmailAddress($mail->From);
        $mail->FromName = $defaults['name'];
        $mail->ClearAllRecipients();
        $mail->ClearReplyTos();
        $mail->Subject=from_html($emailSubject);
        $mail->Body=$emailBody;
        $mail->AltBody = $altemailBody;
        $mail->handleAttachments($attachments);
        $mail->prepForOutbound();
        $mail->AddAddress($emailTo);

        //now create email
        if ($mail->send()) {
            $emailObj->to_addrs= '';
            $emailObj->type= 'out';
            $emailObj->deleted = '0';
            $emailObj->name = $mail->Subject;
            $emailObj->description = $mail->AltBody;
            $emailObj->description_html = $mail->Body;
            $emailObj->from_addr = $mail->From;
            isValidEmailAddress($emailObj->from_addr);
            if ($relatedBean instanceof SugarBean && !empty($relatedBean->id)) {
                $emailObj->parent_type = $relatedBean->module_dir;
                $emailObj->parent_id = $relatedBean->id;
            }
            $emailObj->date_sent = TimeDate::getInstance()->nowDb();
            $emailObj->modified_user_id = '1';
            $emailObj->created_by = '1';
            $emailObj->status = 'sent';
            $emailObj->save();

            return true;
        } else {
            return false;
        }
    }
}