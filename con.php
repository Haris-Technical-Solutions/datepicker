if(!empty($date)){
            $date = explode(" to ",$date)
            //  (str_split(str_replace(" to ","",$date),10));
            $to = $date[1];
            $from = $date[0];
            $datecol = 'products.created_on';
            $list = [$from,$to];
            $where = 'whereBetween';
        }else{
            $to = '';
            $from = '';
            $datecol = 'products.filter';
            $list = 'none';
            $where = 'where';
        }
