<?php/** * Created by PhpStorm. * User: Rg * Date: 2017/2/15 * Time: 14:55 */namespace OA\Model;use Think\Model;class UserRoleModel extends Model {    /**     * 根据用户id获取用户角色     * @param array where     * @return array     */    public function findByUid( $where = array()) {        return $this->where($where)->find();    }    /**     * 添加用户角色     * @param array $data     * @return boolean     */    public function insert($data = array()) {        return $this->data($data)->add();    }    /**     * 设置用户角色     * @param array $data     * @param array $where     * @return boolean     */    public function update($data = array(), $where = array()) {        return $this->where($where)->save($data);    }}